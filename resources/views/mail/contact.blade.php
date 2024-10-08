<x-mail::message>
{{ $form->get('civility') }}. {{ $form->get('lastname') }} {{ $form->get('firstname') }} ({{ $form->get('phone') }}), travaillant chez {{ $form->get('company') }} a envoyé un message.

<x-mail::panel>
{{ $form->get('message') }}
</x-mail::panel>
</x-mail::message>

