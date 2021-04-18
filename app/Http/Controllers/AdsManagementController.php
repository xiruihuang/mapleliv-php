<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;
use DB;
use Intervention\Image\ImageManagerStatic as Image;

use App\AdBanner;
use App\User;

class AdsManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Auth::check()){
            if(Auth::user()->type < 3){
                return view('/admin/adsManagement/addAds');

            } else {
                return redirect('/');
            }
        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //
        $ads['ad_name'] = $request->input('name');
        $ads['ad_position'] = $request->input('adsPosition');
        $ads['ad_dimension'] = $request->input('adsDimension');
        $ads['ad_link_path'] = $request->input('adsWeb');
        $ads['is_paid'] = $request->input('isPaid');
        $ads['sponsor'] = $request->input('sponssor');
        $ads['ad_description'] = $request->input('detail');
        $ads['route_url'] = $request->input('route');
        $ads['is_active'] = 0;

        $file = $request->all();

        $path1 = public_path('ads/');
        $path2 = '../ads/'.$file['file']->getClientOriginalName();
        // Image::make($file['file'])->save($path1);
        //using move instead of Image
//        $file['file']->move($path1, $file['file']->getClientOriginalName());
//        dd(strpos($file['file']->getClientOriginalName(),'jgp') !== false);
        if (strpos($file['file']->getClientOriginalName(),'gif') !== false){
            $file['file']->move($path1, $file['file']->getClientOriginalName());
        }
        else{
            Image::make($file['file'])->save(public_path('ads/'.$file['file']->getClientOriginalName()));
        }

        $ads['ad_image_url'] = $path2;
        AdBanner::create($ads);
        return redirect('/showAllAds')->with('success', '发布成功');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if(Auth::check()){
            $ads = AdBanner::all();
            $users = User::all();
            return view('/admin/adsManagement/showAllAds',compact('ads','users'));
        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        if(Auth::check()){
                $ads = AdBanner::findorFail($id);
                $ads['is_active'] = 1;
                $newAds = $ads -> update();
                Alert::success('发布成功');
                return redirect()->back()->with('success', '发布成功');

        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
    }

    public function remove($id)
    {
        //
        if(Auth::check()){
            $ads = AdBanner::findorFail($id);
            $ads['is_active'] = 0;
            $newAds = $ads -> update();
            Alert::success('发布成功');
            return redirect()->back()->with('success', '发布成功');

        } else {
            Alert::error('Please Log in as Administrator!');
            return redirect('/login')->with('error', 'Please Log in as Administrator!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
