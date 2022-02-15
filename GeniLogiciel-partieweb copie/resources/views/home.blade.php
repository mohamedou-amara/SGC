@extends('base')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark navbarColor02">
    <div class="container-fluid">
    <div class="drapeau">
        <img src="images/user-4.png"/>
    </div>
    <div class="collapse navbar-collapse" id="navbarColor01">
    <a class="navbar-brand" href="#"> 
             {{$nom_etu}}   {{$prenom}}  
        </a> 
    </div>
    </div>
</nav>





<div class="container-contact100">
<div class="wrap-contact100 body">
    {{-- @if ($choixvalue =='1') --}}
  <form class="contact100-form validate-form" method="POST" action="{{route('checker')}}">
      @csrf
      <div class="drapeau1">
        <img src="images/2 copie 2.png"/>
    </div>
				<label class="label-input100" for="first-name">Votre nom et prénom *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" value="{{$nom_etu}}" name="first_name" placeholder="nom">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" value="{{$prenom}}" name="last_name" placeholder="Prenom">
					<span class="focus-input100"></span>
				</div>
				{{-- <label class="label-input100" for="phone">Enter votre telephone</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +212 xxxxxxxxx">
					<span class="focus-input100"></span>
				</div>
      --}}
				<label class="label-input100" for="message">demander un certificat *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<select class="form-control form-control-lg" name="selection">
						<option selected>Choisir le type certificat</option>
						<option value="Attestation Scolarité">Attestation Scolarité</option>
						<option value="Attestation Réussite">Attestation Réussite</option>
						<option value="Relevé Note">Relevé Note</option>
					  </select>
				</div>

                <label class="label-input100" for="message">L'année du document *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<select class="form-control form-control-lg" name="Date">
						<option selected>Choisir l'année</option>
						<option value="2020-2021">2020-2021</option>
						<option value="2019-2020">2019-2020</option>
						<option value="2018-2019">2018-2019</option>
						<option value="2017-2018">2017-2018</option>
						<option value="2016-2017">2016-2017</option>
                        <option value="2015-2016">2015-2016</option>
                        <option value="2014-2015">2014-2015</option>
                        <option value="2013-2014">2013-2014</option>
                        <option value="2012-2013">2012-2013</option>
                        <option value="2011-2012">2011-2012</option>
					  </select>
				</div>

        <div class="container-contact100-form-btn">
          <button class="contact100-form-btn coleur2">
              Enregistrer
          </button>
      </div>
  </form>
  {{-- @endif --}}

  {{-- @if ($choixvalue =='2')
  <form class="contact100-form validate-form" method="POST" action="{{route('checker')}}">
    @csrf
    <div class="drapeau1">
        <img src="images/2 copie 2.png"/>
    </div>
              <label class="label-input100" for="first-name">Votre nom *</label>
              <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                  <input id="first-name" class="input100" type="text" value="{{$nom_etu}}" name="first_name" placeholder="nom">
                  <span class="focus-input100"></span>
              </div>
              <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
                  <input class="input100" type="text" value="{{$prenom}}" name="last_name" placeholder="Prenom">
                  <span class="focus-input100"></span>
              </div>
              <label class="label-input100" for="phone">Enter votre telephone</label>
              <div class="wrap-input100">
                  <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +212 xxxxxxxxx">
                  <span class="focus-input100"></span>
              </div>
  <label class="label-input100" for="message">Passer une certification </label>
          <div class="wrap-input100 validate-input" data-validate = "Message is required">
              <select class="form-control form-control-lg" name="selection2">
                  <option selected> Choisir une certification </option>
                  @foreach ($certificats as $certificat)
                  <option value="{{$certificat->Nom}}">{{$certificat->Nom}}</option>
                  @endforeach
                  <option selected> Choisir une certificat </option>
                  <option value="Laravel">Laravel certificat</option>
      <option value="BIG DATA">Certificat BIG DATA</option>
                  <option value="CLOUD">CLOUD</option>
                </select>
          </div>
          <div class="container-contact100-form-btn ">
            <button class="contact100-form-btn coleur2">
                Enregistrer
            </button>
        </div>
    </form>
                      
  @endif --}}

  <div class="contact100-more flex-col-c-m" style="background-image: url('images/Ensa.jpeg');">
    <div class="flex-w size1 p-b-47">
        <div class="txt1 p-r-25">
            <span class="lnr lnr-map-marker"></span>
        </div>

        <div class="flex-col size2">
            <span class="txt1 p-b-20">
                Address
            </span>

            <span class="txt2 couleur">
                ENSA de Avenue de la Palestine Mhanech I، Tetouan
            </span>
        </div>
    </div>

    <div class="dis-flex size1 p-b-47">
        <div class="txt1 p-r-25">
            <span class="lnr lnr-phone-handset"></span>
        </div>

        <div class="flex-col size2">
            <span class="txt1 p-b-20 ">
                Contacter nous
            </span>

            <span class="txt3 couleur ">
                +212 5396-88027
            </span>
        </div>
    </div>

    <div class="dis-flex size1 p-b-47">
        <div class="txt1 p-r-25">
            <span class="lnr lnr-envelope"></span>
        </div>

        <div class="flex-col size2">
            <span class="txt1 p-b-20">
                LAISSEZ NOUS UN MESSAGE
            </span>

            <span class="txt3 couleur">
                ensatetouan@uae.ac.ma
            </span>
        </div>
    </div>
</div>

</div>
</div>
<style>
   .couleur
    {
        color: #FFA07A;
    }

    .coleur2:hover
    {
        background: #FFA07A; 
    }
    
    .coleur2
    {
        background: #3e73a8;
    }
    .drapeau
    {
        width: 50px;
        height: 50px;
        position: relative;
        top: 5px;
        left: -2px;
        background-repeat: no-repeat;
    }
    .drapeau1
    {
        width: 70px;
        height: 70px;
        left: 100px; 
        bottom: 40px;
        position: relative;
        background-repeat: no-repeat;
    }
    /* .body
    {
        background-image: url('images/wallpaper1.jpg');
        position: relative;
        background-repeat: no-repeat;
    } */
    .navbarColor02
    {
        background: #3e73a8;
    }
</style>
@endsection