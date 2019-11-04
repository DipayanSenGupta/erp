@extends('layouts.app')
@section('content')
<table>
    <thead>    
    <tr>
            <th> RefNo</th>
            <th> Name</th>
            <th> City  </th>
            <th> Country </th>
            <th> Telephone</th>
            <th> Mobile </th>
            <th> Fax </th>
            <th> Contact Person </th>
            <th> Email Id </th>
            <th> Address </th>
            <th> Account Details </th>
            <th> Bank Name </th>
            <th> Account Number </th>
            <th> Swift Code </th>
            <th> Edit </th>

        </tr>
    </thead>
    <tbody>
         @foreach($customers as $customer)
          <tr>
              <td> {{$customer->refNo}} </td>
              <td> {{$customer->name}} </td>
              <td> {{$customer->city}} </td>
              <td> {{$customer->country}} </td>
              <td> {{$customer->telephone}} </td>
              <td> {{$customer->mobile}} </td>
              <td> {{$customer->fax}} </td>
              <td> {{$customer->contact_person}} </td>
              <td> {{$customer->email_id}} </td>
              <td> {{$customer->address}} </td>
              <td> {{$customer->account_details}} </td>
              <td> {{$customer->bank_name}} </td>
              <td> {{$customer->account_number}} </td>
              <td> {{$customer->swift_code}} </td>
              <td><a href="{{action('CustomerController@edit',$customer->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{action('CustomerController@destroy', $customer->id)}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
             </tr>
         @endforeach
         {!! $customers->links() !!}

        </tbody>
</table>
@endsection