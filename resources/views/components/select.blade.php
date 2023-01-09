@props(['disabled' => false, 'options' => []])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50',
]) !!}>
  @foreach ($options as $option)
    <option selected="{{ $option['selected'] }}" value="{{ $option['value'] }}">
      {{ $option['valueText'] }}</option>
  @endforeach
</select>
