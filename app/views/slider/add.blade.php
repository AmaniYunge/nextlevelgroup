
{{ Form::open(array("url"=>url('slider/add'),"class"=>"form-horizontal", 'id'=>'FileUploader','files' => true)) }}
<h2 class="text-center text-muted">Add new Slide</h2>

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
<div class='12' style="font-size: 12px">

    <div class='form-group'>
        <div class="col-md-6">
            Image1<br>
             {{ Form::file('img1',array('required'=>'required','class'=>'')) }}
        </div>

    </div>

    <div class='form-group'>
        <div class="col-md-6">
            Title<br>
            {{ Form::text('title1','',array('class'=>'form-control','placeholder'=>'title','required'=>'required')) }}
        </div>
        <div class="col-md-6">
            Description<br>
            {{ Form::text('description1','',array('class'=>'form-control','placeholder'=>'description','required'=>'required')) }}
        </div>
    </div>

    <div class='form-group'>
        <div class="col-md-6">
            Image2<br>
            {{ Form::file('img2',array('required'=>'required','class'=>'')) }}
        </div>

    </div>

    <div class='form-group'>
        <div class="col-md-6">
            Title<br>
            {{ Form::text('title2','',array('class'=>'form-control','placeholder'=>'title','required'=>'required')) }}
        </div>
        <div class="col-md-6">
            Description<br>
            {{ Form::text('description2','',array('class'=>'form-control','placeholder'=>'description','required'=>'required')) }}
        </div>
    </div>

    <div class='form-group'>
        <div class="col-md-6">
            Image3<br>
            {{ Form::file('img3',array('required'=>'required','class'=>'')) }}
        </div>

    </div>

    <div class='form-group'>
        <div class="col-md-6">
            Title<br>
            {{ Form::text('title3','',array('class'=>'form-control','placeholder'=>'title','required'=>'required')) }}
        </div>
        <div class="col-md-6">
            Description<br>
            {{ Form::text('description3','',array('class'=>'form-control','placeholder'=>'description','required'=>'required')) }}
        </div>
    </div>


</div>
<div id="output"></div>
<div class='col-sm-12 form-group text-center'>
    {{ Form::submit('Add slider',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
    {{ Form::reset('Reset',array('class'=>'btn btn-warning','id'=>'submitqn')) }}
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
            }, 3000);
            $("#listslider").load("<?php echo url("slider/list") ?>")
        }
    });
</script>
