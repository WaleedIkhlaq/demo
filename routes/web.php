<?php
    
    use App\Http\Controllers\Home;
    use Illuminate\Support\Facades\Route;
    
    Route ::get ( '/', [
        Home::class,
        'index'
    ] );
    
    Route ::get ( '/states/{country_id}', [
        Home::class,
        'states'
    ] ) -> whereNumber ( 'country_id' );
    
    Route ::get ( '/cities/{state_id}', [
        Home::class,
        'cities'
    ] ) -> whereNumber ( 'state_id' );
