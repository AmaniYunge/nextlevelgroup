
{{ Form::open(array("url"=>url("offer/edit/{$offer->id}"),"class"=>"form-horizontal", "id"=>'FileUploader','files' => true)) }}

<!--response messages-->
@if(isset($emsg))
<div class="alert alert-danger alert-dismissable" >
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{ $emsg }}!</strong>
</div>
@endif

@if(isset($msg))
<div class="alert alert-success alert-dismissable" >
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{ $msg }}!</strong>
</div>
@endif

<h2 class="text-center text-muted">Update</h2><h2 class="text-center text-primary"></h2> <h2 class="text-center text-muted">Information</h2>

<div class='12' style="font-size: 12px">

    <div class='form-group'>
        <div class="col-md-6">
            Image<br>
            {{ Form::file('img',array('required'=>'required','class'=>'')) }}
        </div>

        <div class="col-md-6">
            Title<br>
            {{ Form::text('title',$offer->title,array('class'=>'form-control')) }}

        </div>
    </div>

    <div class='form-group'>
        <div class="col-md-6">
            Descrptions<br>
            {{ Form::text('description',$offer->description,array('class'=>'form-control')) }}
        </div>
    </div>


</div>
<div id="output"></div>
<div class='col-sm-12 form-group text-center'>
    {{ Form::submit('Update',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
</div>
{{ Form::close() }}

<script>
    $(document).ready(function (){

        $('#FileUploader').on('submit', function(e) {
            e.preventDefault();
            $("#output").html("<h3><i class='fa fa-spin fa-spinner '></i><span>Making changes please wait...</span><h3>");
            $(this).ajaxSubmit({
                target: '#output',
                success:  afterSuccess
            });

        });

        function afterSuccess(){
            $('#FileUploader').resetForm();
            setTimeout(function() {
                $("#output").html("");
                $("#addoffer").load("<?php echo url("offer/add") ?>")
            }, 3000);
            $("#listoffer").load("<?php echo url("offer/list") ?>")

        }
    });
</script>