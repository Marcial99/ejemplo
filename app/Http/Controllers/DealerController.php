<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dealer;
class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aguascalientes=Dealer::where('estado','Aguascalientes')->get();
        $bajaC=Dealer::where('estado','Baja California')->get();
        $bajaS=Dealer::where('estado','Baja California Sur')->get();
        $campeche=Dealer::where('estado','Campeche')->get();
        $cdmx=Dealer::where('estado','CDMX')->get();
        $chiapas=Dealer::where('estado','Chiapas')->get();
        $chihuahua=Dealer::where('estado','Chihuahua')->get();
        $coahuila=Dealer::where('estado','Coahuila')->get();
        $colima=Dealer::where('estado','Colima')->get();
        $durango=Dealer::where('estado','Durango')->get();
        $edomex=Dealer::where('estado','Estado de México')->get();
        $gto=Dealer::where('estado','Guanajuato')->get();
        $guerrero=Dealer::where('estado','Guerrero')->get();
        $hidalgo=Dealer::where('estado','Hidalgo')->get();
        $jalisco=Dealer::where('estado','Jalisco')->get();
        $mich=Dealer::where('estado','Michoacán')->get();
        $nay=Dealer::where('estado','Nayarit')->get();
        $nl=Dealer::where('estado','Nuevo León')->get();
        $oax=Dealer::where('estado','Oaxaca')->get();
        $puebla=Dealer::where('estado','Puebla')->get();
        $qro=Dealer::where('estado','Querétaro')->get();
        $qroo=Dealer::where('estado','Quintana Roo')->get();
        $slp=Dealer::where('estado','San Luis Potosí')->get();
        $sina=Dealer::where('estado','Sinaloa')->get();
        $son=Dealer::where('estado','Sonora')->get();
        $tab=Dealer::where('estado','Tabasco')->get();
        $tam=Dealer::where('estado','Tamaulipas')->get();
        $tex=Dealer::where('estado','Texas')->get();
        $ver=Dealer::where('estado','Veracruz')->get();
        $zac=Dealer::where('estado','Zacatecas')->get();
        $otr=Dealer::where('estado','Otros')->get();
        $mor=Dealer::where('estado','Morelos')->get();
        $a=0;
        
        return view('distribuidoras',compact('aguascalientes','bajaC','bajaS','campeche','cdmx','chiapas','chihuahua','coahuila','colima','durango','edomex'
    ,'gto','guerrero','hidalgo','jalisco','mich','nay','nl','oax','puebla','qro','qroo'
,'slp','sina','son','tab','tam','tex','ver','zac','otr','mor'));

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
