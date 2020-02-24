<div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <form class="form-horizontal" id="messagesForm" action="/send-categorized-message" method="get">
                    
                    @csrf
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Contact groups</label>
                    <div class="col-sm-10">
                        <a href="#" class="btn btn-default dropdown-toggle w-50" data-toggle="dropdown">
                        Select a category &nbsp;<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" style="padding: 5px;" id="myDiv">
                            <li><input type="checkbox" id="select_all2"/> All Categories</li>
                            @foreach($categories as $category)
                            <div class="checkbox2 checkbox">
                                <label>
                                <input type="checkbox" class="checkbox  dropdown-item checkbox-primary" name="category[]" value="{{$category->id}}" data-count="{{ $category->number_of_subscribers }}" /> {{ $category->title }}
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
                    <input type="text" class="form-control" id="reservationdaytime2" name="scheduled_date" value="{{ old('created_at') }}" autocomplete="off">
                  </div>
                  <!-- /.input group -->
                </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Text message</label>
                    <div class="col-sm-10">
                      <textarea type="text" class="form-control" rows="8" rows="7" name="message" id="textBoxId" maxlength='310' value="{{ old('message') }}" required></textarea>
                       <p id="numberOfChars">0   characters [1message is 160 characters,2messages 310 characters]</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Number of contacts</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="contact_character" id="category_contacts_count" placeholder="">
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="text-center mb-3">
                <a href="{{url()->previous()}}"><button type="submit" class="btn btn-warning">Back</button></a>
                  <button type="submit" class="btn btn-success ">Send message</button>
                </div>
                <!-- /.card-footer -->
              </form>
                  </div>
                  <!-- /.tab-pane -->