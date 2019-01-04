<form action="{{ route('translations.store') }}" method="POST">
  @include('shared._errors')
  {{ csrf_field() }}
  <textarea class="form-control" rows="3" placeholder="中文" name="chinese">{{ old('chinese') }}</textarea>
  <p></p>
  <textarea class="form-control" rows="3" placeholder="English" name="english">{{ old('english') }}</textarea>

  <div class="text-right">
      <button type="submit" class="btn btn-primary mt-3">发布</button>
  </div>
</form>