@extends('layouts.app')

@section('content')
<? 
        // This section displays the farewell page
        // which congratulates you for completing
        // the survey and provides additional links to
        // redirect to the welcome page, or a link to
        // the respondenddts page.
?>
<div class="grid-x">
    <div class="cell" style="padding-top: 250px">
        <div class="card">
            <div class="card-section">
                <h1>Thank you for completing this survey!</h1>
                <a href="/"><h2>Click here to return to redirect</h1></a>
                <a href="/respondents"><h2>Click here if you want to participate in more surveys</h1></a>

            </div>
        </div>
    </div>    
</div>
            
@endsection