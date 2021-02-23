<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVendorRequest;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::all();
        return view('admin.vendors.index', compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vendors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreVendorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVendorRequest $request)
    {
        $data = $request->all();
        $data['printer_flg'] = $request->has('printer_flg');
        $data['photocopy_flg'] = $request->has('photocopy_flg');
        $data['cartridge_flg'] = $request->has('cartridge_flg');
        $data['status'] = $request->has('status');
        DB::beginTransaction();
        try {
            $vendor = Vendor::create($data);
            if ($request->file('featured_image')) {
                $media = $vendor
                    ->addMedia($request->featured_image)
                    ->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                $vendor->logo = $media->getFullUrl();
                $vendor->save();
            }
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('vendors.create')->with('error', $exception->getMessage());
        }
        DB::commit();
        return redirect()->route('vendors.index')->with('message', 'nhà cung cấp '. $vendor->name .' đã được thêm vào hệ thống!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Vendor $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        return view('admin.vendors.edit', compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreVendorRequest  $request
     * @param Vendor $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(StoreVendorRequest $request, Vendor $vendor)
    {
        $data = $request->all();
        $data['printer_flg'] = $request->has('printer_flg');
        $data['photocopy_flg'] = $request->has('photocopy_flg');
        $data['cartridge_flg'] = $request->has('cartridge_flg');
        $data['status'] = $request->has('status');
        DB::beginTransaction();
        try {
            $vendor->update($data);
            if ($request->file('featured_image')) {
                $media = $vendor
                    ->addMedia($request->featured_image)
                    ->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                $vendor->logo = $media->getFullUrl();
                $vendor->save();
            }
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('vendors.create')->with('error', $exception->getMessage());
        }
        DB::commit();
        return redirect()->route('vendors.index')->with('message', 'nhà cung cấp '. $vendor->name .' đã được thêm vào hệ thống!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendor = Vendor::find($id);
        $vendor->products()->delete();
        $vendor->delete();
        return redirect()->route('vendors.index')->with('message', 'Nhà cung cấp <b>'. $vendor->name .'</b> đã được xóa khỏi hệ thống!');
    }
}
