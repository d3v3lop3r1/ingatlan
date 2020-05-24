<!-- Modal -->
<div class="modal fade" id="messengerModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" id="messenger-header">
            <h4 class="text-center"><i class="far fa-envelope"></i> &nbsp Küldjön üzenetet</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="messenger-body">
            <div class="row">
                <div class="col-xs-12 text-center">
                    {!! Form::open(['action'=>'MailController@guest_message', 'method'=>'POST','name'=>'uzenet_kuldese']) !!}
                        <div class="message-container-form">
                            <div class="form-group mb-3">
                                {!! Form::text('name',null,['class' => 'form-control form-control-sm','required', 'placeholder'=>'Név']); !!}
                            </div>
                            <div class="form-group mb-3">
                                {!! Form::email('email',null,['class' => 'form-control form-control-sm','required', 'placeholder'=>'Email']); !!}
                            </div>
                            <div class="form-group mb-3">
                                {!! Form::text('tel',null,['class' => 'form-control form-control-sm', 'placeholder'=>'Telefon']); !!}
                            </div>
                            <div class="form-group mb-3">
                                {!! Form::textarea('message',null,['class' => 'form-control form-control-sm','rows'=>'5','required', 'placeholder'=>'Üzenet']); !!}
                            </div>
                            <div class="col">
                                {!! Form::submit('Üzenet küldése', ['class'=>"btn message-btn btn-sm"]) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
