<?php
    
    namespace App\Http\Controllers;
    
    use App\Models\City;
    use App\Models\Country;
    use App\Models\State;
    use Illuminate\Http\Request;
    
    class Home extends Controller {
        
        /**
         * ------------
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
         * loads home page
         * populates countries
         * ------------
         */
        
        public function index () {
            $data[ 'countries' ] = Country ::all ();
            return view ( 'index', $data );
        }
        
        /**
         * ------------
         * @param $country_id
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
         * fetch states based on country id
         * ------------
         */
        
        public function states ( $country_id ) {
            $data[ 'states' ] = State ::where ( [ 'country_id' => $country_id ] ) -> get ();
            return view ( 'states', $data );
        }
        
        /**
         * ------------
         * @param $country_id
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
         * fetch cities based on state id
         * ------------
         */
        
        public function cities ( $state_id ) {
            $data[ 'cities' ] = City ::where ( [ 'state_id' => $state_id ] ) -> get ();
            return view ( 'cities', $data );
        }
        
    }
