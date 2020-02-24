<div class="active tab-pane" id="activity">
                  <form class="form-horizontal" action="/store-sent-messages" method="get">
                  @csrf
                  @include('layouts.message')
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Contact groups</label>
                    <div class="col-sm-10">
                    <a href="#" class="btn btn-default dropdown-toggle w-50" data-toggle="dropdown">
                    Select a group &nbsp;<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu " style=";" id="myDiv">
                        <li><input type="checkbox" id="select_all"/> All groups</li>
                        @foreach($drop_down_groups as $picking_from_database)
                        <div class="checkbox1 checkbox">
                            <label>
                            <input type="checkbox" class="checkbox dropdown-item checkbox-primary" name="checkbox[]" value="{{$picking_from_database->id}}" data-count="{{ $picking_from_database->number_of_contacts }}" /> {{ $picking_from_database->group_name }}
                            </label>
                        </div>
                        @endforeach
                    </ul>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Date and Time</label>
                    <div class="col-sm-10">
                    <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" class="form-control" id="reservationtime" name="scheduled_date" value="{{ old('created_at') }}" autocomplete="off">
                  </div>
                  <!-- /.input group -->
                </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Text message</label>
                    <div class="col-sm-10">
                      <textarea type="text" class="form-control" rows="8" name="message" id="message" onkeyup="countChars(this);" maxlength='310' value="{{ old('message') }}" required></textarea>
                      <p id="charNum">0   characters [1 message is 160 characters,2messages 310 characters]</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Number of contacts</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="contact_character" id="contact_character" placeholder="">
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="text-center mb-3">
                  <button type="submit" class="btn btn-warning">Back</button>
                  <a href="{{url()->previous()}}"><button type="submit" class="btn btn-success ">Send message</button></a>
                </div>
                <!-- /.card-footer -->
              </form>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->