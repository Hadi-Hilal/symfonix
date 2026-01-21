@section('title' , __('Leads'))

@section('toolbar')
    @php
        $breadcrumbItems = [
            ['label' => 'Dashboard', 'url' => route('admin.dashboard.index')],
            ['label' => 'Leads'],
        ];
    @endphp
    <x-admin.breadcrumb :pageTitle="__('Leads')" :breadcrumbItems="$breadcrumbItems"/>
@endsection

<x-admin-layout>
    <x-admin.table :model="$model" search="Search In Leads"
                   :formUrl="route('admin.leads.deleteMulti')">
        <thead>
        <tr class="text-start text-muted fw-bold fs-7 gs-0">
            <th class="w-10px pe-2" data-orderable="false">
                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                           data-kt-check-target="#dataTable .form-check-input" value="1"/>
                </div>
            </th>
            <th>{{ __('Details') }}</th>
            <th>{{ __('Service Interest') }}</th>
            <th>{{ __('Project Budget') }}</th>
            <th>{{ __('Ip Address') }}</th>
            <th>{{ __('Status') }}</th>
            <th>{{ __('Created At') }}</th>
            <th></th>
        </tr>
        </thead>
        <tbody class="text-gray-600 fw-semibold">
        @foreach($model as $lead)
            <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" name="ids[]" value="{{$lead->id}}"/>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column">
                        <span class="text-gray-800 mb-1">
                            {{ $lead->name ?? __('N/A') }}
                        </span>
                        <span class="text-gray-500">{{ $lead->company_name ?? __('N/A') }}</span>
                        @if($lead->email)
                            <a class="text-hover-primary text-gray-500" target="_blank"
                               href="mailto:{{$lead->email}}">{{$lead->email}}</a>
                        @endif
                    </div>
                </td>
                <td>
                    @if($lead->service)
                        {{ $lead->service->getTranslation('title', app()->getLocale()) }}
                    @else
                        {{ $lead->service_interest ?? __('N/A') }}
                    @endif
                </td>
                <td>{{ $lead->project_budget ?? __('N/A') }}</td>
                <td>
                    @if($lead->ip_address)
                        <a href="https://whatismyipaddress.com/ip/{{$lead->ip_address}}" target="_blank">
                            {{$lead->ip_address}}
                        </a>
                    @else
                        {{ __('N/A') }}
                    @endif
                </td>
                <td>
                    <span class="badge badge-light-{{ $lead->blocked ? 'danger' : 'success' }}">
                        {{ $lead->blocked ? __('Blocked') : __('Active') }}
                    </span>
                </td>
                <td>{{ $lead->created_at }}</td>
                <td>
                    <div class="d-flex align-items-center gap-2 flex-wrap">
                        <a href="{{ route('admin.leads.show', $lead) }}" class="btn btn-sm btn-light-primary">
                            <i class="bi bi-eye"></i> {{ __('View Details') }}
                        </a>
                        @if($lead->blocked)
                            <form method="POST" action="{{ route('admin.leads.unblock', $lead) }}">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-light-warning">
                                    <i class="bi bi-unlock"></i> {{ __('Unblock Lead') }}
                                </button>
                            </form>
                        @else
                            <form method="POST" action="{{ route('admin.leads.block', $lead) }}">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="bi bi-lock"></i> {{ __('Block Lead') }}
                                </button>
                            </form>
                        @endif
                        <form method="POST" action="{{ route('admin.leads.destroy', $lead) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-light-danger">
                                <i class="bi bi-trash"></i> {{ __('Delete') }}
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </x-admin.table>
</x-admin-layout>
