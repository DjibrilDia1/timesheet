<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Timesheet') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <!-- Timesheet Header -->
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-bold" style="font-family: 'Abyssinica SIL', serif;">
                            {{ __('Weekly Timesheet') }}
                        </h3>
                        <div class="flex space-x-4">
                            <select class="border rounded-md px-3 py-2" style="font-family: 'Abyssinica SIL', serif;">
                                <option>{{ __('Current Week') }}</option>
                                <option>{{ __('Previous Week') }}</option>
                                <option>{{ __('Next Week') }}</option>
                            </select>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600" style="font-family: 'Abyssinica SIL', serif;">
                                {{ __('Add Entry') }}
                            </button>
                        </div>
                    </div>

                    <!-- Timesheet Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" style="font-family: 'Abyssinica SIL', serif;">
                                        {{ __('Date') }}
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" style="font-family: 'Abyssinica SIL', serif;">
                                        {{ __('Project') }}
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" style="font-family: 'Abyssinica SIL', serif;">
                                        {{ __('Task') }}
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" style="font-family: 'Abyssinica SIL', serif;">
                                        {{ __('Start Time') }}
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" style="font-family: 'Abyssinica SIL', serif;">
                                        {{ __('End Time') }}
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" style="font-family: 'Abyssinica SIL', serif;">
                                        {{ __('Hours') }}
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" style="font-family: 'Abyssinica SIL', serif;">
                                        {{ __('Actions') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200" id="timesheet-entries">
                                <!-- Sample entries will be populated here -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" style="font-family: 'Abyssinica SIL', serif;">
                                        {{ now()->format('d/m/Y') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" style="font-family: 'Abyssinica SIL', serif;">
                                        <select class="border rounded px-2 py-1">
                                            <option>{{ __('Project Alpha') }}</option>
                                            <option>{{ __('Project Beta') }}</option>
                                            <option>{{ __('Project Gamma') }}</option>
                                        </select>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" style="font-family: 'Abyssinica SIL', serif;">
                                        <input type="text" class="border rounded px-2 py-1" placeholder="{{ __('Task description') }}">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" style="font-family: 'Abyssinica SIL', serif;">
                                        <input type="time" class="border rounded px-2 py-1" value="09:00">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" style="font-family: 'Abyssinica SIL', serif;">
                                        <input type="time" class="border rounded px-2 py-1" value="17:00">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" style="font-family: 'Abyssinica SIL', serif;">
                                        <span class="hours-calculated">8.0</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-indigo-600 hover:text-indigo-900 mr-2" style="font-family: 'Abyssinica SIL', serif;">
                                            {{ __('Save') }}
                                        </button>
                                        <button class="text-red-600 hover:text-red-900" style="font-family: 'Abyssinica SIL', serif;">
                                            {{ __('Delete') }}
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Summary -->
                    <div class="mt-6 flex justify-end">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-lg font-semibold mb-2" style="font-family: 'Abyssinica SIL', serif;">
                                {{ __('Weekly Summary') }}
                            </h4>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span style="font-family: 'Abyssinica SIL', serif;">{{ __('Total Hours:') }}</span>
                                    <span class="font-bold" id="total-hours" style="font-family: 'Abyssinica SIL', serif;">40.0</span>
                                </div>
                                <div class="flex justify-between">
                                    <span style="font-family: 'Abyssinica SIL', serif;">{{ __('Overtime:') }}</span>
                                    <span class="font-bold" id="overtime-hours" style="font-family: 'Abyssinica SIL', serif;">0.0</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Add CSS for Abyssinica SIL font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap');
        
        body {
            font-family: 'Abyssinica SIL', serif;
        }
        
        .timesheet-container {
            font-family: 'Abyssinica SIL', serif;
        }
        
        .timesheet-input {
            font-family: 'Abyssinica SIL', serif;
            font-size: 14px;
        }
        
        .timesheet-button {
            font-family: 'Abyssinica SIL', serif;
            transition: all 0.3s ease;
        }
        
        .timesheet-button:hover {
            transform: translateY(-1px);
        }
    </style>

    <!-- JavaScript for interactive functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Calculate hours automatically
            function calculateHours(startTime, endTime) {
                if (!startTime || !endTime) return 0;
                
                const [startH, startM] = startTime.split(':').map(Number);
                const [endH, endM] = endTime.split(':').map(Number);
                
                let hours = endH - startH;
                let minutes = endM - startM;
                
                if (minutes < 0) {
                    hours -= 1;
                    minutes += 60;
                }
                
                return hours + (minutes / 60);
            }

            // Update hours when time inputs change
            document.querySelectorAll('input[type="time"]').forEach(input => {
                input.addEventListener('change', function() {
                    const row = this.closest('tr');
                    const startTime = row.querySelector('input[type="time"]:first-of-type').value;
                    const endTime = row.querySelector('input[type="time"]:last-of-type').value;
                    const hoursSpan = row.querySelector('.hours-calculated');
                    
                    const hours = calculateHours(startTime, endTime);
                    hoursSpan.textContent = hours.toFixed(1);
                    
                    // Update total
                    updateTotalHours();
                });
            });

            function updateTotalHours() {
                let total = 0;
                document.querySelectorAll('.hours-calculated').forEach(span => {
                    total += parseFloat(span.textContent) || 0;
                });
                
                document.getElementById('total-hours').textContent = total.toFixed(1);
                
                // Calculate overtime (assuming 40 hours standard)
                const overtime = Math.max(0, total - 40);
                document.getElementById('overtime-hours').textContent = overtime.toFixed(1);
            }

            // Add new entry functionality
            document.querySelector('button').addEventListener('click', function() {
                const tbody = document.getElementById('timesheet-entries');
                const newRow = document.createElement('tr');
                
                newRow.innerHTML = `
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900" style="font-family: 'Abyssinica SIL', serif;">
                        ${new Date().toLocaleDateString('fr-FR')}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        <select class="border rounded px-2 py-1 timesheet-input">
                            <option>{{ __('Project Alpha') }}</option>
                            <option>{{ __('Project Beta') }}</option>
                            <option>{{ __('Project Gamma') }}</option>
                        </select>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        <input type="text" class="border rounded px-2 py-1 timesheet-input" placeholder="{{ __('Task description') }}">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        <input type="time" class="border rounded px-2 py-1 timesheet-input" value="09:00">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        <input type="time" class="border rounded px-2 py-1 timesheet-input" value="17:00">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        <span class="hours-calculated">8.0</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <button class="text-indigo-600 hover:text-indigo-900 mr-2 timesheet-button">
                            {{ __('Save') }}
                        </button>
                        <button class="text-red-600 hover:text-red-900 timesheet-button">
                            {{ __('Delete') }}
                        </button>
                    </td>
                `;
                
                tbody.appendChild(newRow);
                
                // Add event listeners to new inputs
                newRow.querySelectorAll('input[type="time"]').forEach(input => {
                    input.addEventListener('change', function() {
                        const row = this.closest('tr');
                        const startTime = row.querySelector('input[type="time"]:first-of-type').value;
                        const endTime = row.querySelector('input[type="time"]:last-of-type').value;
                        const hoursSpan = row.querySelector('.hours-calculated');
                        
                        const hours = calculateHours(startTime, endTime);
                        hoursSpan.textContent = hours.toFixed(1);
                        
                        updateTotalHours();
                    });
                });
            });
        });
    </script>
</x-app-layout>
