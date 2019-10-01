@if(session("mensaje"))
<div class="alert alert-seccess alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-chek"></i> Mensaje sistema Curso </h4>
    <ul>       
        <li>{{ session("mensaje") }}</li>        
    </ul>
</div>
@endif