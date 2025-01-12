    <div class="col-12 col-md-9">
        <div class="card">
            <div class="card-header justify-content-center">
                <h2 class="mb-0">{{ __('Thông tin Admin') }}</h2>
            </div>
            <div class="row card-body">
                <!-- Email Address -->
                <div class="col-md-6 col-sm-12">
                    <div class="mb-3">
                        <label class="control-label">{{ __('Email') }}:</label>
                        <x-input-email name="email" :value="$admin->email" :required="true" />
                    </div>
                </div>
                <!-- Fullname -->
                <div class="col-md-6 col-sm-12">
                    <div class="mb-3">
                        <label class="control-label">{{ __('Họ và tên') }}:</label>
                        <x-input name="fullname" :value="$admin->fullname" :required="true"
                            placeholder="{{ __('Họ và tên') }}" />
                    </div>
                </div>
                <!-- new password -->
                <div class="col-md-6 col-sm-12">
                    <div class="mb-3">
                        <label class="control-label">{{ __('Mật khẩu') }}:</label>
                        <x-input-password name="password" />
                    </div>
                </div>
                <!-- new password confirmation-->
                <div class="col-md-6 col-sm-12">
                    <div class="mb-3">
                        <label class="control-label">{{ __('Xác nhận mật khẩu') }}:</label>
                        <x-input-password name="password_confirmation"
                            data-parsley-equalto="input[name='password']"
                            data-parsley-equalto-message="{{ __('Mật khẩu không khớp.') }}" />
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="mb-3">
                        <label class="control-label">{{ __('Số điện thoại') }}:</label>
                        <x-input-phone name="phone" :value="$admin->phone" :required="true" />
                    </div>
                </div>
                <!-- Role -->
                <div class="col-md-6 col-sm-12">
                    <div class="mb-3">
                        <label class="control-label">{{ __('Roles') }}:</label>
                        <x-select name="roles" :required="true">
                            <x-option value="" :title="__('Chọn roles')" />
                            @foreach ($roles as $key => $value)
                                <x-option :option="$admin->roles->value" :value="$key" :title="__($value)" />
                            @endforeach
                        </x-select>
                    </div>
                </div>
            </div>
        </div>
    </div>