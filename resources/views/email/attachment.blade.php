@component('mail::message')
    @component('mail::table')
        | Info       | Value         |
        | ------------- |:-------------:|
        | Name      | {{$data['name']}}      |
        | Wechat      | {{$data['wechat']}}  |
        | Email Address      | {{$data['email']}}  |
        | Occupation      | {{$data['occupation']}}  |
        | College      | {{$data['colleage']}}  |
        | Prefer Area      | {{$data['area']}}  |
        | Move-In      | {{$data['movein']}}  |
        | Lease Term      | {{$data['lease']}}  |
        | Pet      | {{$data['pat']}}  |
        | Budget      | {{$data['budget']}}  |
        | Furniture      | {{$data['furnitures']}}  |
        | Parking Spot      | {{$data['park']}}  |
        | Check Property      | {{$data['check']}}  |
        | Prepaid      | {{$data['prepaid']}}  |
    @endcomponent
@endcomponent
