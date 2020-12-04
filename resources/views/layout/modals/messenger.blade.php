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
                <div class="col-xs-12 text-center" id="messenger_id">
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
                                {!! Form::hidden('agent_id', "0",['id'=>'agent_id']) !!}
                                {!! Form::hidden('property_id', "0",['id'=>'property_id']) !!}
                            <div class="col">
                                {!! Form::submit('Üzenet küldése', ['class'=>'btn message-btn btn-sm g-recaptcha','data-sitekey'=>'6LcvlN0ZAAAAANc0OtnBFtnaTLaE17PaxmvOoOC2','data-callback'=>'onSubmit','data-action'=>'submit']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
