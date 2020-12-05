<div class="form-group">
    <label>Car Type</label>
    <input type="text" name="type" class="form-control" id="" aria-describedby=""
           placeholder="Enter car type" value="{{$record->type ?? ''}}" required>
    @error('type')
    <h5 class="text-danger">{{$message}}</h5>
    @enderror
</div>

<div class="form-group">
    <label>Car Company</label>
    <input type="text" name="car_company" class="form-control" id="" aria-describedby=""
           placeholder="Enter car company" value="{{$record->car_company ?? ''}}" required>
    @error('car_company')
    <h5 class="text-danger">{{$message}}</h5>
    @enderror
</div>

<div class="form-group">
    <label>Car Number</label>
    <input type="text" name="car_no" class="form-control" id="" aria-describedby=""
           placeholder="Enter car number" value="{{$record->car_no ?? ''}}" required>
    @error('car_no')
    <h5 class="text-danger">{{$message}}</h5>
    @enderror
</div>

<div class="form-group">
    <label>Rental Cost</label>
    <input type="text" name="price" class="form-control" id="" aria-describedby=""
           placeholder="Enter car rental cost" value="{{$record->price ?? ''}}" required>
    @error('price')
    <h5 class="text-danger">{{$message}}</h5>
    @enderror
</div>

<div class="form-group">
    <label>Remark</label>
    <textarea rows="4" name="remark" class="form-control">{{$record->remark ?? ''}}</textarea>
    @error('remark')
    <h5 class="text-danger">{{$message}}</h5>
    @enderror
</div>



