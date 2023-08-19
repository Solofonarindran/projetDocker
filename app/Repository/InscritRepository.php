<?php
    namespace App\Repository;
    use App\Models\Inscrit;
    use App\Models\Mouvement;
    use Illuminate\Support\Facades\DB;

    class InscritRepository extends AbstractRepository
    {
        public function __construct(Inscrit $inscrit)
        {
            $this->model=$inscrit;
            $this->relation=['eleve.geniteur','anneescolaire','classe','mouvements','contrats'];
        }
        //get by annnescolaire_id

        public function getByAnneeId($annee_id)
        {
            return $this->model
                        ->where('anneescolaire_id',$annee_id)
                        ->with($this->relation)
                        ->get();
        }

        // recherche par eleve id et la dernière année scolaire (max id)
        // Gérance Réinscription méthode 1

        public function researchInscrit($id)
        {
            return $this->model
                        //->select('*')
                        ->where('anneescolaire_id',$id)
                        ->where('is_reinscrit',FALSE)
                        ->groupBy('eleve_id')     
                        ->orderBy('eleve_id')
                        ->with($this->relation)
                        ->get();
        }

        //recherche inscrit par id avec le nombre de mois frais payé
        // Gestion financière - frais scolaire

        public function nbFraisPayé($id)
        {
           return $this->model::find($id)->mouvements
                                   ->sum(fn(Mouvement $mvt)=>$mvt->nb)
                                   ->where('anneescolaire_id',$anneeScoId)
                                   ->where('libelle','ecolage');
                                   
        }


        // return les inscrit doivent notés

        public function inscritByClassIdAnneSco($classe_id,$annee_id)
        {
            return $this->model
                        ->newQuery()
                        ->where('classe_id',$classe_id)
                        ->where('anneescolaire_id',$annee_id)
                        ->with(['eleve'])
                        ->get();
        }
    }