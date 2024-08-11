    <div class="modal fade js-modal-settings modal-backdrop-transparent" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right modal-md">
            <div class="modal-content">
                <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center w-100">
                    <h4 class="m-0 text-center color-white">
                        Paramètres 
                        <small class="mb-0 opacity-80">Interface d'utilisateur</small>
                    </h4>
                    <button type="button" class="close text-white position-absolute pos-top pos-right p-2 m-1 mr-2"
                        data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="settings-panel">
                        <div class="mt-4 d-table w-100 px-5">
                            <div class="d-table-cell align-middle">
                                <h5 class="p-0">Paramètres de Vue de la Page</h5>
                            </div>
                        </div>
                        <div class="list" id="fh">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle"
                                data-class="header-function-fixed"></a>
                            <span class="onoffswitch-title">Fixed Header</span>
                            <span class="onoffswitch-title-desc" style="color:#000">Fixé la tête de la page</span>
                        </div>
                        <div class="list" id="nff">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle"
                                data-class="nav-function-fixed"></a>
                            <span class="onoffswitch-title">Fixed Navigation</span>
                            <span class="onoffswitch-title-desc" style="color:#000">Fixé la bare de navigation côté gauche</span>
                        </div>
                        
                        <div class="list" id="nft">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle"
                                data-class="nav-function-top"></a>
                            <span class="onoffswitch-title">Top Navigation</span>
                            <span class="onoffswitch-title-desc" style="color:#000">Déplacé la bare vers le haut</span>
                        </div>
                       
                     
                       
                        <div class="mt-4 d-table w-100 px-5">
                            <div class="d-table-cell align-middle">
                                <h5 class="p-0">Accessibility</h5>
                            </div>
                        </div>
                       
                        <div class="list" id="mhc">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle"
                                data-class="mod-high-contrast"></a>
                            <span class="onoffswitch-title">Haute Contraste</span>
                            <span class="onoffswitch-title-desc">4.5:1 text contrast ratio</span>
                        </div>

                        <div class="list" id="mcb">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle"
                                data-class="mod-color-blind"></a>
                            <span class="onoffswitch-title">Daltonism <sup>(beta)</sup>
                            </span>
                            <span class="onoffswitch-title-desc" style="color:#000">Couleur affaiblie</span>
                        </div>
                       
                        <div class="mt-4 d-table w-100 px-5">
                            <div class="d-table-cell align-middle">
                                <h5 class="p-0">Global Modifications</h5>
                            </div>
                        </div>
                       
                        <div class="list" id="mhni">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle"
                                data-class="mod-hide-nav-icons"></a>
                            <span class="onoffswitch-title">Hide Navigation Icons</span>
                            <span class="onoffswitch-title-desc" style="color:#000">Masquer les icônes de navigation</span>
                        </div>
                        
                        <div class="list" id="mnl">
                            <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle"
                                data-class="mod-nav-link"></a>
                            <span class="onoffswitch-title">Hierarchical Navigation</span>
                            <span class="onoffswitch-title-desc">Clear breakdown of nav links</span>
                        </div>
                        <div class="list mt-1">
                            <span class="onoffswitch-title">Global Font Size <small>(Taille de  Police)</small>
                            </span>
                            <div class="btn-group btn-group-sm btn-group-toggle my-2" data-toggle="buttons">
                                <label class="btn btn-default btn-sm" data-action="toggle-swap"
                                    data-class="root-text-sm" data-target="html">
                                    <input type="radio" name="changeFrontSize" /> SM
                                </label>
                                <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text"
                                    data-target="html">
                                    <input type="radio" name="changeFrontSize" checked="" /> MD
                                </label>
                                <label class="btn btn-default btn-sm" data-action="toggle-swap"
                                    data-class="root-text-lg" data-target="html">
                                    <input type="radio" name="changeFrontSize" /> LG
                                </label>
                                <label class="btn btn-default btn-sm" data-action="toggle-swap"
                                    data-class="root-text-xl" data-target="html">
                                    <input type="radio" name="changeFrontSize" /> XL
                                </label>
                            </div>
                            <span class="onoffswitch-title-desc d-block mb-g">Changer <strong>la taille</strong> du Police
                             </span>
                        </div>
                        
                        <span id="saving"></span>

                        <div class="t-3 d-flex justify-content-center">
                                <button class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close"
                                data-toggle="modal" data-target="#default-example-modal-center">Paramètres Année Scolaire</button>
                        </div>

                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="default-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Paramètre Année Scolaire
                       
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body"> 
                    <div class="panel-content mt-4">

                        <ul class="nav nav-tabs mb-3" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                    href="#tab_direction-1" role="tab" aria-selected="true">Nouvelle Année</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab_direction-2"
                                    role="tab" aria-selected="false">Années Existantes</a></li>

                        </ul>
                        <div class="tab-content p-3">
                            <div class="tab-pane fade active show" id="tab_direction-1" role="tabpanel">
                                <form action="#" method="post">
                                @csrf
                                  
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Profession:</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="profession_father">
                                    </div>

                                    <div class="form-group d-flex justify-content-center">
                                        <button type="submit" class="btn btn-sm btn-outline-primary">Enregistrer</button>
                                    </div>

                                </form>
                                
                            </div>
                            <div class="tab-pane fade" id="tab_direction-2" role="tabpanel">
                                    <button class="btn btn-primary mb-6" data-toggle="modal" data-target=".default-example-modal-right-lg"><i class="fa fa-search mr-2"></i> Trouver un
                                    Identifiant</button>
                        

                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nom Père: </label>
                                        <input type="text" name="father" class="form-control" id="exampleFormControlInput1" style="text-transform:uppercase"
                                            disabled>
                                    </div>
                    
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Profession:</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="professionPere"
                                            disabled>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nom Mère: </label>
                                        <input type="text" name="mother" class="form-control" id="exampleFormControlInput1" style="text-transform:uppercase"
                                            disabled>
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Adresse:</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            name=adress_dir2>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Profession:</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="professionMere"
                                            disabled>
                                    </div>
                                    

                                    <form action="" method="post">
                                        @csrf
                                        <div class="form-group ">
                                            <label for="exampleFormControlInput1">Identifiant: </label>
                                
                                            <input type="text" name="geniteur_id" class="form-control" id="exampleFormControlInput1">
                                        </div>

                                        <div class="form-group d-flex justify-content-center">
                                            <button type="submit" class="btn btn-sm btn-outline-primary">Confirmer</button>
                                        </div>

                                    </form>
                                
                            </div>

                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    
                </div>
            </div>
        </div>
    </div>