<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-4">
                            Plantillas
                        </div>  
                        <div class="col-md-1">&nbsp</div>  
                        <div class="col-md-7 ">
                            <div class="row">
                                <div class="col-md-2">&nbsp</div>  
                                <div class="col-md-2">
                                    Ver&nbsp&nbsp<span class="glyphicon glyphicon-eye-open"></span>
                                </div> 
                                <div class="col-md-2">
                                    Editar&nbsp&nbsp<span class="glyphicon glyphicon-pencil"></span>
                                </div> 
                                <div class="col-md-2">
                                    Publicar&nbsp&nbsp<span class="glyphicon glyphicon-send"></span>
                                </div> 
                                <div class="col-md-2">
                                    Copiar&nbsp&nbsp<span class="glyphicon glyphicon-copy"></span>
                                </div>   
                                <div class="col-md-2">
                                   <a href="/survey/create" class="pull-right">Nueva</a>
                                </div>      
                            </div>
                        </div>
                    </div>    
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card well" >
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Titulo de la encuesta</h4>
                                    <p class="card-text">Creada por <span class="template-creator">Administrador1</span></p>
                                    <div class="btn-group " role="group" aria-label="...">
                                        <button type="button" class="btn btn-default"  data-toggle="tooltip" data-placement="top" title="Vista previa">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </button>
                                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Editar">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </button>
                                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Publicar">
                                            <span class="glyphicon glyphicon-send"></span>
                                        </button>
                                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Copiar">
                                            <span class="glyphicon glyphicon-copy"></span>
                                        </button>
                                        
                                    </div>
                                    <!-- <a  class="" href="{{ url('/surveyed/solve') }}">Ver</a>&nbsp&nbsp
                                    <a  class="" href="{{ url('/surveyed/solve') }}">Editar</a>&nbsp&nbsp
                                    <a  class="" href="#" data-toggle="modal" data-target="#myModal">Publicar</a> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card well" >
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Titulo de la encuesta</h4>
                                    <p class="card-text">Creada por <span class="template-creator">Administrador2</span></p>
                                    <div class="btn-group " role="group" aria-label="...">
                                        <button type="button" class="btn btn-default"  data-toggle="tooltip" data-placement="top" title="Vista previa">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </button>
                                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Editar">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </button>
                                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Publicar">
                                            <span class="glyphicon glyphicon-send"></span>
                                        </button>
                                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Copiar">
                                            <span class="glyphicon glyphicon-copy"></span>
                                        </button>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>

                            
                            
                    </div>
                </div>
            </div>


            <!-- Modal publicar encuesta-->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Publicar encuesta - Titulo de la encuesta</h4>
                </div>
                <div class="modal-body">
                <div class="input-daterange input-group" id="datepicker" data-provide="datepicker">
                    <input type="text" class="input-sm form-control" name="start" placeholder="Inicio"/>
                    <span class="input-group-addon">a</span>
                    <input type="text" class="input-sm form-control" name="end" placeholder="Final"/>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Publicar</button>
                </div>
                </div>
            </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-7">
                            
                            Encuestas publicadas
                        </div>  
                        <div class="col-md-1">&nbsp</div>  
                        <div class="col-md-4 ">
                            <div class="row">
                                <div class="col-md-5">&nbsp</div>
                                <div class="col-md-3">
                                    Activa<div class="pull-right survey-status survey-status__active">&nbsp</div>
                                </div> 
                                <div class="col-md-4 ">
                                    Finalizada<div class="pull-right survey-status survey-status__finished">&nbsp</div>
                                </div>      
                            </div>
                        </div>
                    </div>    
                    <!-- <div class=" bg-dark-red simbo">
                        <div class="row">
                            <div class="col-md-4">

                            </div>
                        </div>

                    clos<div class=" survey-status survey-status__finished">&nbsp</div></div> -->

                    </div>
                    
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card well" >
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Titulo de la encuesta</h4>
                                    <p class="card-text"></p>
                                    <a  class="" href="{{ url('/surveyed/solve') }}">Ver</a>
                                    <div class="pull-right survey-status survey-status__finished">&nbsp</div>
                                 
                                    <!-- <a  class="" href="{{ url('/surveyed/solve') }}">Editar</a> -->
                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card well" >
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Titulo de la encuesta</h4>
                                    <p class="card-text"></p>
                                    <a  class="" href="{{ url('/surveyed/solve') }}">Ver</a>
                                    <div class="pull-right survey-status survey-status__active">&nbsp</div>
                                    <!-- <a  class="" href="{{ url('/surveyed/solve') }}">Editar</a> -->
                                 
                                </div>
                            </div>
                        </div>

                            
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>