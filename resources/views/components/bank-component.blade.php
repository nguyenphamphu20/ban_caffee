<div>
    <div class="bank__card">
        <div class="bank__content">
            <div class="bank__name">{{$nameBank}} Card</div>
            <div class="bank__number">{{addSpaceBetweenNumbers($numberBank)}}</div>
            <div class="bank__group">
                <div class="bank__left">
                    <div class="bank__title">Card holder</div>
                    <div class="bank__name-user">{{convertToUnsignedUppercase($name)}}</div>
                </div>
                <div class="bank__right">
                    <div class="bank__title">Expired</div>
                    <div class="bank__expired">{{$expired}}</div>
                </div>
            </div>
        </div>
        <img src="{{asset('images/frontend/user/bank.svg')}}" class="bank__img" alt="bank">
    </div>
</div>