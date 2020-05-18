@extends('layouts.app')

@section('content')
<? 
    // The first Card Section provides a link that would either lead
    // a logged in user to the homepage, or to a login page if not logged in.
?>
    <div class="card">
        <div class="card-divider">
            <p class="lead">Private Access</p>
        </div>
            <div class="card-section">
                <div class="grid-x">
                    <div class="cell small-10">
                        <p class="lead">Click here to gain access to the various tools and features included to create ad manage your own Questionnaires!</p>
                    </div>
                    <div class="cell small-2">
                        <a href="/home" class="button">Access Questionnaires</a> <? // Link to Access Questionnaires ?>
                    </div>
                </div>
            </div>
    </div>

    <? 
        // The Second Card Section provides a link that would lead any user
        // to a list of available surveys released to the public.
    ?>

    <div class="card">
        <div class="card-divider">
        <p class="lead">Public Access</p>
        </div>
            <div class="card-section">
                <div class="grid-x">
                    <div class="cell small-10">
                        <p class="lead">Click here to access all of the available questionnaires outputed by its various researchers!</p>
                    </div>
                    <div class="cell small-2">
                        <a href="/respondents" class="button">View Public Questionnaires</a> <? // Link to Public Questionnaires ?>
                    </div>
                </div>

            </div>
    </div>
        
@endsection