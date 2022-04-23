@component('mail::message')
    @component('mail::table')
        | Info       | Value         |
        | ------------- |:-------------:|
        | Name      | {{$data['name']}}      |
        | Wechat      | {{$data['wechat']}}  |
        | Occupation      | {{$data['occupation']}}  |
        | Colleage      | {{$data['colleage']}}  |
        | Prefered Area      | {{$data['area']}}  |
        | Has Pat      | {{$data['pat']}}  |
        | Budget      | {{$data['budget']}}  |
        | Has Furnitures      | {{$data['furnitures']}}  |
        | Need Park      | {{$data['park']}}  |
        | Check Property      | {{$data['check']}}  |
        | Prepaid      | {{$data['prepaid']}}  |
    @endcomponent
@endcomponent
