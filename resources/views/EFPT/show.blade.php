@extends('layouts.template')


@section('content')
<!--marquee class="fform-p" style='font-weight: bold; font-size: 30px;color:rgb(246, 120, 58);' direction="up" behavior="scroll" scrollamount="2">Appuyer sur une région de la carte pour avoir des informations sur les centres de formation </marquee-->
<p style='font-weight: bold; font-size: 20px;color:rgb(246, 120, 58); text-align: center;' >Cliquer sur une région de la carte pour avoir des informations sur les centres de formation </p>
<div>
    <h1 class="text-center mt-4" style="color:  #020031;">Statistiques Nationales</h1>
</div>

<div>
    <!-- Page Content -->
    <div class="content content-narrow">
        <!-- Stats -->
        <div class="row">
            <div class="col-md-4 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase" style="color:rgb(246, 120, 58);">Centre Formation</div>
                        <div class="font-size-h2 font-w400" style="color:  #020031;">{{ count($etablissement) }}</div>
                    </div>
                </a>
            </div>
            <div class=" col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase" style=" color:rgb(246, 120, 58);">Effectif Garçons</div>
                        <div class="font-size-h2 font-w400" style="color:  #020031;">{{ ($efGarcon) }}</div>
                    </div>
                </a>
            </div>
            <div class=" col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase" style=" color:rgb(246, 120, 58);">Effectif Filles</div>
                        <div class="font-size-h2 font-w400" style="color:  #020031;">{{ ($efFille) }}</div>
                    </div>
                </a>
            </div>
         
                <div class=" col-md-12 col-lg-12 col-xl-3">
                    <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                        <div class="block-content block-content-full text-center">
                            <div class="font-size-sm font-w600 text-uppercase" style=" color:rgb(246, 120, 58);"> Total</div>
                            <div class="font-size-h2 font-w400" style="color:  #020031;">{{ ($total) }}</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>




    <!-- END Stats -->
    <div class="row">
        <div class="col-md-12 col-lg-10 ml-10 mb-4">
            <img src="{{ asset('template/img/cartes/senegal.gif') }}" alt="dkr" usemap="#carte_senegal" class="mt-7 mb-5" />
        </div>
    </div>

    <map name="carte_senegal">
        <area shape="poly" name=area1 coords="0,159,11,148,43,149,67,180,30,202,3,201" title="" alt="Dakar" href="/EFPT.departement/1">
        <area shape="poly" name=area1 coords="47,127,97,131,101,151,74,186,55,188,38,154" title="" alt="Thiés" href="/EFPT.departement/2">
        <area shape="poly" name=area1 coords="157,73,263,71,286,113,240,179,153,164,122,120" title="" alt="Louga" href="/EFPT.departement/3">
        <area shape="rect" name=area1 coords="179,15,307,74" title="" alt="Saint-Louis" href="/EFPT.departement/5">
        <area shape="rect" name=area1 coords="292,93,429,170" title="" alt="Matam" href="/EFPT.departement/11">
        <area shape="rect" name=area1 coords="337,199,492,272" title="" alt="Tamba" href="/EFPT.departement/12">
        <area shape="rect" name=area1 coords="387,305,518,382" title="" alt="Kédougou" href="/EFPT.departement/14">
        <area shape="rect" name=area1 coords="230,291,354,357" title="" alt="Kolda" href="/EFPT.departement/13">
        <area shape="rect" name=area1 coords="152,316,219,371" title="" alt="Sedhiou" href="/EFPT.departement/10">
        <area shape="rect" name=area1 coords="66,315,151,376" title="" alt="Ziguinchor" href="/EFPT.departement/9">
        <area shape="rect" name=area1 coords="134,247,213,280" title="" alt="Kaolack" href="/EFPT.departement/6">
        <area shape="rect" name=area1 coords="189,190,318,249" title="" alt="Kaffrine" href="/EFPT.departement/8">
        <area shape="rect" name=area1 coords="75,188,169,228" title="" alt="Fatick" href="/EFPT.departement/7">
        <area shape="rect" name=area1 coords="104,155,195,183" title="" alt="Diourbel" href="/EFPT.departement/4">
    </map>
</div>



@endsection