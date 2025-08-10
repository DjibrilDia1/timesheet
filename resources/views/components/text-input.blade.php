    @props(['disabled' => false])

    <input @disabled($disabled) {{ $attributes->merge(['class' => 'bg-white border-gray-300 focus:border-primary focus:ring-white rounded-md shadow-sm']) }}>