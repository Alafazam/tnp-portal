<style>
.toggle-header{
    padding:10px 0;
    margin:10px 0;
    background-color:black;
    color:white;
}
.txt-green{
    color:green;
}
.txt-red{
    color:red;
}
</style>

<h1>Company Markings</h1>
<div class="row">
	<div class="panel panel-default clearfix">
        <div class="panel-heading">
            <h2 class="panel-title">Package Heading</h2>
            <p class="small">
                Package Description                              
            </p>
        </div>

        <div class="col-xs-12 toggle-header">
            <div class="col-xs-6">
                <button type="button" class="btn btn-primary btn-sm hidden-xs" data-toggle="collapse" data-target="#feature-1">
                    <i class="glyphicon glyphicon-resize-vertical"></i>Toggle Feature Set
                </button>
                <button type="button" class="btn btn-primary btn-xs visible-xs" data-toggle="collapse" data-target="#feature-1">
                    <i class="glyphicon glyphicon-resize-vertical"></i>Toggle Set
                </button>
            </div>
            <div class="col-xs-2 text-center">
                <span class="hidden-xs">Small</span>
                <span class="visible-xs">S</span>
            </div>
            <div class="col-xs-2 text-center">
             <span class="hidden-xs">Medium</span>
             <span class="visible-xs">M</span>
         </div>
         <div class="col-xs-2 text-center">
             <span class="hidden-xs">Large</span>
             <span class="visible-xs">L</span>
         </div>
     </div>
     
     <div id="feature-1" class="collapse in">
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6">
                    First Package Feature                                             
                </div>
                <div class="col-xs-2 text-center">
                    <i class="glyphicon glyphicon-ok txt-green"></i>
                </div>
                <div class="col-xs-2 text-center">
                    <i class="glyphicon glyphicon-ok txt-green"></i>
                </div>
                <div class="col-xs-2 text-center">
                    <i class="glyphicon glyphicon-ok txt-green"></i>
                </div>
            </div>
        </div>  
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6">
                    Second Package Feature
                </div>
                <div class="col-xs-2 text-center">
                    <i class="glyphicon glyphicon-remove txt-red"></i>
                </div>
                <div class="col-xs-2 text-center">
                    <i class="glyphicon glyphicon-remove txt-red"></i>
                </div>
                <div class="col-xs-2 text-center">
                    <i class="glyphicon glyphicon-ok txt-green"></i>
                </div>
            </div>
        </div>  
    </div>
</div>
</div>
</div>