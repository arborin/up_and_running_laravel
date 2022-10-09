{{--

echo variables
{{ $varname }}

by default using htmlentities()

if you want ot use it without htmlentities use:
{!! $varname !!}

=======================================================

# CONTROLE SCTUCTURES
> Conditionals

@if(count($talks) === 1)
    bla bla bla
@elseif(count($talks) === 2)
    bla bla bla
@else
    bla bla bla
@endif


>if(!$condition)
@unless
    bla bla bla
@endunless

> Loops: for, foreach, while

@for($i=0; $i<$list->slotsCount(); $i++)

@endfor


@foreach($talks as $talk)

@endforeach


@while($condition)

@endwhile

> forelse - iterate if it is not empty

@forelse($talks as $talk)
    {{ $talk->title }}
@empty
    No Talks this day
@endforelse

> $loop ცვლადი ხელმისაწვდომია ციკლში და მას აქვს:
* index - 0 დან ინდექსაცია
* iteration - ნუმერაცია 1 დან
* remaining - რამდენი ელემენტია რჩება ციკლში
* count - რამდენი ელემენტია ციკლში
* first - boolean მნიშვნელობა თუ პირველი ელემენტია
* last - boolean მნიშვნელობა თუ ბოლო ელემენტია
* depth - 1,2,3... ციკლში ჩადგმული ციკლის შემთხვევაში
* parent - მშობელი ციკლის $loop ცვლადი




# TEMPLATE INHERITANCE

@section, @show, @yeled

@extends

@parent - use extends view section content and add new one.
        - or overwrite to it


@include - view_ს ჩასმა და მონაცემის გადაცემა
> example
@include('sign-up-button', ['text' => 'See just how great it is!'])

sign-up-button - is blade template

@includeid - include view if exists
@includeWhen - თუ პირობა სრულდება
@includeFirst(['view', 'view2']) - ჩასვამს პირველივე როგორც კი შეხვდება

# @each

# @stack
@stack('scripts')

@push('scripts')

@endpush

# COMPONENTS AND SLOTS







--}}
