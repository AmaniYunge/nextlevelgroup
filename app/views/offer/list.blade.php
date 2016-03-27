<?php
$offer = Offer::all();
?>
<table class='table table-striped table-responsive' id='offertable'>

    <thead>
    <tr>
        <th>Offer</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <?php $i = 1; ?>
        @foreach($offer as $offer)
        <td >
            <div class="col-xs-12">
                <div class="col-sm-4">
                    {{ HTML::image("uploads/offer/{$offer->image}","",array('class'=>'img-rounded thumbnail','style'=>'height:100px;width:100px')) }}
                </div>
                <div class="col-sm-8" style="font-size: 12px">
                    Title : <strong>{{ $offer->title }}</strong><br><br>
                    Descriptin : <strong>{{ $offer->description }}</strong>

                </div>
                <div class="col-xs-12 links" id="{{$offer->id }}">
                    <a href="#d" title="edit offer" class="editoffer btn btn-xs btn-info"><i class="fa fa-pencil text-info"></i> edit</a>&nbsp;&nbsp;&nbsp;
                    <a href="#u" title="delete offer" class="deleteoffer btn btn-xs btn-danger"><i class="fa fa-trash-o text-info"></i> delete</a>&nbsp;&nbsp;&nbsp;
                </div>

        </td>
    </tr>
    @endforeach

    </tbody>
</table>

<!--script to process the list of rooms-->
<script>
    $(document).ready(function (){

        $("#offertable").dataTable({
            "bJQueryUI": true,
            "sPaginationType": "full_numbers",
            "fnDrawCallback": function( oSettings ) {
//               $("#stafftable").find("td.links a").hide();
//               $("#stafftable").find("tr").hover(function(){
//                   $(this).find("td.links a").show()
//               },function(){
//                   $(this).find("td.links a").hide();
//               })
                $(".editoffer").click(function(){
                    var id1 = $(this).parent().attr('id');
                    $("#addoffer").html("<br><i class='fa fa-spinner fa-spin'></i>loading...");
                    $("#addoffer").load("<?php echo url("offer/edit") ?>/"+id1);
                })
                //deleting a room
                $(".deleteoffer").click(function(){
                    var id1 = $(this).parent().attr('id');
                    $(".deleteoffer").show("slow").parent().parent().find("span").remove();
                    var btn = $(this).parent().parent().parent();
                    $(this).hide("slow").parent().append("<span><br>Are You Sure <br /> <a href='#s' id='yes' class='btn btn-success btn-xs'><i class='fa fa-check'></i> Yes</a> <a href='#s' id='no' class='btn btn-danger btn-xs'> <i class='fa fa-times'></i> No</a></span>");
                    $("#no").click(function(){
                        $(this).parent().parent().find(".deleteoffer").show("slow");
                        $(this).parent().parent().find("span").remove();
                    });
                    $("#yes").click(function(){
                        $(this).parent().html("<br><i class='fa fa-spinner fa-spin'></i>deleting...");
                        $.post("<?php echo url("offer/delete")?>/"+id1,function(data){
                            btn.hide("slow").next("hr").hide("slow");
                        });
                    });
                });//endof deleting category
            }
        });
        $('input[type="text"]').addClass("form-control");
        $('select').addClass("form-control");


    });
</script>





