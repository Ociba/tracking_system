<div class="tab-pane" id="settings">
                    <form class="form-horizontal" id="messagesForm" action="/send-uncategorized-message" method="get">
                    @csrf
                    @include('layouts.message')
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Text message</label>
                        <div class="col-sm-10">
                          <textarea type="email"rows="10" class="form-control" name="message" id="textBoxIduncat" maxlength='310' value="{{ old('message') }}" required></textarea>
                          <p id="numberOfCharsuncat">0   characters [1 message is 160 characters,2messages 310 characters]</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Number of contacts</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="contact_character" id="category_contacts_count" placeholder="" value="{{auth()->user()->getCountOfUncategorized()}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="text-center mb-3 col-sm-10">
                        <a href="{{url()->previous()}}"><button type="submit" class="btn btn-warning">Back</button></a>
                          <button type="submit" class="btn btn-success">Send message</button>
                        </div>
                      </div>
                    </form>
                  </div>