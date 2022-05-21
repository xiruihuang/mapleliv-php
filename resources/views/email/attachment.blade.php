@component('mail::message')
    @component('mail::table')
        | Info       | Value         |
        | ------------- |:-------------:|
        | Name      | {{$data['name']}}      |
        | Wechat      | {{$data['wechat']}}  |
        | Email Address      | {{$data['email']}}  |
        | Occupation      | {{$data['occupation']}}  |
        | Colleage      | {{$data['colleage']}}  |
        | Prefered Area      | {{$data['area']}}  |
        | MoveIn Date      | {{$data['movein']}}  |
        | Lease Term      | {{$data['lease']}}  |
        | Has Pat      | {{$data['pat']}}  |
        | Budget      | {{$data['budget']}}  |
        | Has Furnitures      | {{$data['furnitures']}}  |
        | Need Park      | {{$data['park']}}  |
        | Check Property      | {{$data['check']}}  |
        | Prepaid      | {{$data['prepaid']}}  |
    @endcomponent
@endcomponent
