<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Dettagli Attività</h3>
    </div>
    <div class="panel-body">
        
        <form action="/admin/attivita/{{ $activity->id }}" method="POST">
            {{csrf_field()}}
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Titolo</label>
                        <input class="form-control" name="title" value="{{ old('title', $activity->title) }}" placeholder="Titolo attività" >
                    </div>
                    <div class="form-group">
                        <label>Sottotitolo</label>
                        <input class="form-control" name="subtitle"  value="{{ old('subtitle', $activity->subtitle) }}"  placeholder="Sottotitolo attività" >
                    </div>
                    
                </div>
                <div class="col-lg-6">

                    <div class="form-group">
                        <label>Stato</label>
                        <select name="status_id">
                            @foreach($statuses as $status)
                            <option value="{{$status['id']}}">{{$status['title']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>In Slide</label>

                        <input type="checkbox"  class="form-control" name="featured"  id="featured" @if($activity->featured) checked @endif>
                    </div>

                    <div class="form-group">
                        <div id="selected_image_preview"></div>
                    </div>
                    
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Descrizione</label>
                        <textarea class="form-control" name="description" rows="5" placeholder="Descrivi attività">{{ old('description', $activity->description) }}</textarea>
                    </div>
                </div>
            </div>
            
            
            <div class="row">
                
                <div class="col-lg-8 col-lg-offset-4">
                    
                    <button type="submit" class="btn btn-success">Salva</button>
                    <button type="reset" class="btn btn-warning">Abbandona</button>
                </div>
            </form>
        </div>
    </div>
    </div>