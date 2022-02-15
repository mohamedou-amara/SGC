@extends('base')

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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

<div class="container-contact100 body">
<div class="wrap-contact100">
  <form class="contact100-form validate-form" method="POST" action="{{route('typedemande')}}">
      @csrf
      <div class="drapeau1">
        <img class="logo" src="images/2 copie 2.png"/>
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
				</div> --}} 
                  
				<label class="label-input100" for="message">Type De Demande *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<select class="form-control form-control-lg" name="selectionchoix">
						<option selected>Choisir le type demande</option>
						<option value="Attestation">Attestation</option>
						<option value="Certificat">Passer une Certification</option>
					  </select>
				</div>
        

        <div class="container-contact100-form-btn">
          <button class="contact100-form-btn coleur2">
              Validé
          </button>
      </div>
  </form>

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
            <span class="txt1 p-b-20">
                Contacter nous
            </span>

            <span class="txt3 couleur">
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
        color: #3e73a8;
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
        background: url('images/wallpaper1.jpg');
        position: relative;
        background-repeat: no-repeat;
    } */
</style>
@endsection