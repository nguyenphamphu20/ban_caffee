<div>
    <div class="bank-card__card ">
        <div class="bank-card__content">
            <div class="bank-card__name">{{$nameBank}} Card</div>
            <div class="bank-card__number">{{addSpaceBetweenNumbers($numberBank)}}</div>
            <div class="bank-card__group">
                <div class="bank-card__left">
                    <div class="bank-card__title">Card holder</div>
                    <div class="bank-card__name-user">{{convertToUnsignedUppercase($name)}}</div>
                </div>
                <div class="bank-card__right">
                    <div class="bank-card__title">Expired</div>
                    <div class="bank-card__expired">{{$expired}}</div>
                </div>
            </div>
        </div>
        <img src="{{asset('images/frontend/user/bank-'.$nameBank.'.svg')}}" class="bank-card__img" alt="bank-card">
    </div>
</div>