@extends('layout')

    @section('title')
        Inscription
    @endsection

    @section('style')
        <link rel="stylesheet" href="/assets/css/custom-css/gestion-inscription-etape-3.css">
    @endsection

    @section('breadcrumbParent')
        Inscription
    @endsection

    @section('breadcrumbChild')
        Informations Elève
    @endsection

    @section('contents')

        <div class="gestion-inscription-etape-3">  
            
        <section class="person-info-section shadow">
            <h2 class="card-title">
                <i class="fa fa-user"></i>
                INFORMATION SUR L'ETUDIANTS
            </h2>
            <form action="" method="post">
                <div class="form-group mt-4">
                    <span class="badge badge-success" style="font-weight:800; letter-spacing:2px;">Identité Parentale:</span>
                    <span class="badge badge-warning">Clé non modifiable</span>
                    <input type="number" class="form-control" id="exampleFormControlInput1"
                         disabled>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="font-weight:800">Nom: </label>
                    <input type="name" class="form-control" id="exampleFormControlInput1"
                        placeholder="Rakoto, rabe,...">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1" style="font-weight:800">Prénoms:</label>
                    <input type="name" class="form-control" id="exampleFormControlInput1"
                        placeholder="Andry, Irinasoa, ...">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1" style="font-weight:800">Adresse:</label>
                    <input type="name" class="form-control" id="exampleFormControlInput1"
                        placeholder="Besavoa, Morarano,...">
                </div>


                <div class="form-group">
                    <label for="exampleFormControlInput1" style="font-weight:800">Date de naissance:</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1"
                        placeholder="+261 3X XX XXX XX">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1" style="font-weight:800">Lieu de naissance:</label>
                    <input type="name" class="form-control" id="exampleFormControlInput1"
                        placeholder="Ihosy, Ankaramena, Ilakaka..">
                </div>
                <section class="submit-section mt-4 d-flex justify-content-center" >
                    <button class="btn btn-outline-danger mr-4" type="reset">Annuler</button>
                    <button class="btn btn-primary ml-4" type="submit">Confirmer</button>
                       
                </section>

            </form>
            
        </section>
            
        </div> 
       

    @endsection
