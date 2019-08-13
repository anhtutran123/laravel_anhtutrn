@csrf
<input type="hidden" name="id" value="{{ $user->id ?? null }}">
<div class="" style="margin: 30px">
    <div class="form-group @error('mail_address') text-danger @enderror">
        <label for="mail-address">Địa chỉ email</label>
        <input class="form-control @error('mail_address') is-invalid @enderror" name="mail_address" id="mail-address" placeholder="Enter email" value="{{ old('mail_address') ?? $user->mail_address ?? null}}">
        <p>{{ $errors->first('mail_address') }}</p>
    </div>
    <div class="form-group @error('password') text-danger @enderror">
        <label for="password">Mật khẩu</label>
        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Mật khẩu" value="">
        <p>{{ $errors->first('password') }}</p>
    </div>
    <div class="form-group @error('password_confirmation') text-danger @enderror">
        <label for="password-confirmation">Mật khẩu xác nhận</label>
        <input class="form-control @error('password_confirmation')) is-invalid @enderror" type="password" name="password_confirmation" id="password-confirmation" placeholder="Nhập lại mật khẩu" value="">
        <p>{{ $errors->first('password_confirmation') }}</p>
    </div>
    <div class="form-group @error('name') text-danger @enderror">
        <label for="name">Tên</label>
        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="Tên" value="{{ old('name') ?? $user->name ?? null }}">
        <p>{{ $errors->first('name') }}</p>
    </div>
    <div class="form-group @error('address') text-danger @enderror">
        <label for="address">Địa chỉ</label>
        <input class="form-control @error('address') is-invalid @enderror" type="text" name="address" id="address" placeholder="Địa chỉ" value="{{ old('address') ?? $user->address ?? null }}">
        <p>{{ $errors->first('address') }}</p>
    </div>
    <div class="form-group @error('phone') text-danger @enderror">
        <label for="phone">Số điện thoại</label>
        <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" id="phone" placeholder="Số điện thoại" value="{{ old('phone') ?? $user->phone ?? null }}">
        <p>{{ $errors->first('phone') }}</p>
    </div>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="addAction" value="">Xác nhận</button>
</div>
