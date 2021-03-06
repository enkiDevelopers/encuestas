<div class="container">
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
                    <button type="button" class="btn btn-primary" >Publicar</button>
                </div>
                </div>
            </div>
            </div>
<div class="row">
    <div class="col-md-12 ">
        
        <div class="row">
            <div class="col-md-9 light-grey">
                <h2 class="text-center">Nueva encuesta</h2>
            </div>
            <div class="col-md-9 light-grey">
                <form>
                    <div class="new-survey__question-container">
                    
                        <div class="form-group">
                            <label for="exampleInputEmail1">Titulo de la encuesta</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Respuesta">
                            
                        </div>
                        <div class="row new-satisfaction-question-template hide" id="satisfaction-question-template">
                            <div class="col-md-12 well">
                                
                                <div class="row">
                                    <div class="col-md-1"><input type="radio" > 1</div>
                                    <div class="col-md-1"><input type="radio" > 2</div>
                                    <div class="col-md-1"><input type="radio" > 3</div>
                                    <div class="col-md-1"><input type="radio" > 4</div>
                                    <div class="col-md-1"><input type="radio" > 5</div>
                                    <div class="col-md-1"><input type="radio" > 6</div>
                                    <div class="col-md-1"><input type="radio" > 7</div>
                                    <div class="col-md-1"><input type="radio" > 8</div>
                                    <div class="col-md-1"><input type="radio" > 9</div>
                                    <div class="col-md-1"><input type="radio" > 10</div>       
                                </div>
                              
                            </div>
                        </div>
                        <div class="row new-question-template hide" id="new-question-template">
                            <div class="col-md-12 well">

                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Numero</label>
                                        <select class="form-control questions-of-master-survey">
                                            <!-- <option value="1">1</option>
                                            <option value="2">2</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Titulo de la pregunta</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="¿Cual es la pregunta?">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tipo</label>
                                        <select class="form-control yes-no-question">
                                            <option value="1">Pregunta abierta</option>
                                            <option value="2">Pregunta Si/No</option>
                                            <option value="3">Pregunta de satisfacción</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-2 ">
                                    <div class="row">
                                        
                                        <button class="btn btn-danger col-md-4 new-question__control new-question__control--delete-question">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                        <button class="btn btn-info col-md-4  new-question__control">
                                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                </div>


                            </div>

                                              
                    
                        </div>
                        <div class="row hide yes-no-question-block" id="yes-no-question-template">
                            <div class="col-md-12 well" data-questions="0">
                                <div class="btn-group btn-group-xs" role="group" aria-label="...">
                                    <button class="btn btn-success add-question-to-yes-no"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                </div>
                                Preguntas para si 
                                <!-- <div class="row">
                                    <div class="col-md-12 well">
                                                        
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Titulo de la pregunta</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="¿Cual es la pregunta?">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tipo</label>
                                                <select class="form-control yes-no-question">
                                                    <option value="1">Pregunta abierta</option>
                                                    <option value="2">Pregunta Si/No</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-2">
                                            <div class="row">
                                                <div class="col-md-2">&nbsp</div>
                                                <button class="btn btn-danger col-md-3 new-question__control new-question__control--delete-question">
                                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                </button>
                                                <button class="btn btn-info col-md-3  new-question__control">
                                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                            <div class="col-md-12 well" data-questions="0">
                                <div class="btn-group btn-group-xs" role="group" aria-label="...">
                                    <button class="btn btn-success add-question-to-yes-no"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                </div>
                                Preguntas para No
                                <!-- <div class="row">
                                    <div class="col-md-12 well">
                                                
                                            <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Titulo de la pregunta</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="¿Cual es la pregunta?">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tipo</label>
                                                <select class="form-control yes-no-question">
                                                    <option value="1">Pregunta abierta</option>
                                                    <option value="2">Pregunta Si/No</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-2">&nbsp</div>
                                                <button class="btn btn-danger col-md-3 new-question__control new-question__control--delete-question">
                                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                </button>
                                                <button class="btn btn-info col-md-3  new-question__control">
                                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                        </div>

                        
                    </div>
                    

            
                </form>
            </div>
                <div class="col-md-1">&nbsp</div>
                <div class="col-md-2 ">
                     
                    <div class="row">
                        <button class="btn btn-success col-md-12 new-survey__control" id="add-question">Agregar pregunta</button>
                        <!-- <div class="input-group date new-survey__control" data-provide="datepicker">
                            <input type="text" class="form-control" placeholder="Vencimiento">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div> -->
                       
                        <button type="submit" class="btn btn-primary col-md-12 new-survey__control">Guardar</button>
                        <button type="submit" class="btn btn-info col-md-12 new-survey__control" data-toggle="modal" data-target="#myModal">Publicar</button>
                    </div>
                   
                </div>
            </div>