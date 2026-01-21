@section('title' , __('Lead Details'))

@section('toolbar')
    @php
        $breadcrumbItems = [
            ['label' => 'Dashboard', 'url' => route('admin.dashboard.index')],
            ['label' => 'Leads', 'url' => route('admin.leads.index')],
            ['label' => 'Lead Details'],
        ];
    @endphp
    <x-admin.breadcrumb :pageTitle="__('Lead Details')" :breadcrumbItems="$breadcrumbItems"/>
@endsection

<x-admin-layout>
    <div class="card">
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-6">
                    <strong>{{ __('Name') }}:</strong>
                    <p>{{ $lead->name ?? __('N/A') }}</p>
                </div>
                <div class="col-md-6">
                    <strong>{{ __('Email') }}:</strong>
                    @if($lead->email)
                        <p><a href="mailto:{{ $lead->email }}" target="_blank">{{ $lead->email }}</a></p>
                    @else
                        <p>{{ __('N/A') }}</p>
                    @endif
                </div>
                <div class="col-md-6">
                    <strong>{{ __('Company Name') }}:</strong>
                    <p>{{ $lead->company_name ?? __('N/A') }}</p>
                </div>
                <div class="col-md-6">
                    <strong>{{ __('Project Budget') }}:</strong>
                    <p>{{ $lead->project_budget ?? __('N/A') }}</p>
                </div>
                <div class="col-md-6">
                    <strong>{{ __('Service Interest') }}:</strong>
                    <p>
                        @if($lead->service)
                            {{ $lead->service->getTranslation('title', app()->getLocale()) }}
                        @else
                            {{ $lead->service_interest ?? __('N/A') }}
                        @endif
                    </p>
                </div>
                <div class="col-md-6">
                    <strong>{{ __('Status') }}:</strong>
                    <p>
                        <span class="badge badge-light-{{ $lead->blocked ? 'danger' : 'success' }}">
                            {{ $lead->blocked ? __('Blocked') : __('Active') }}
                        </span>
                    </p>
                </div>
                <div class="col-md-6">
                    <strong>{{ __('Ip Address') }}:</strong>
                    @if($lead->ip_address)
                        <p><a href="https://whatismyipaddress.com/ip/{{ $lead->ip_address }}" target="_blank">{{ $lead->ip_address }}</a></p>
                    @else
                        <p>{{ __('N/A') }}</p>
                    @endif
                </div>
                <div class="col-md-6">
                    <strong>{{ __('Created At') }}:</strong>
                    <p>{{ $lead->created_at ? $lead->created_at->format('Y-m-d H:i:s') : __('N/A') }}</p>
                </div>
            </div>

            <div class="mb-4">
                <strong>{{ __('Problem Statement') }}:</strong>
                <div class="bg-light p-3 rounded">
                    {{ $lead->problem_statement ?? __('N/A') }}
                </div>
            </div>

            <div class="mb-4">
                <strong>{{ __('Chat Transcript') }}:</strong>
                <div class="bg-light p-3 rounded" style="max-height: 320px; overflow-y: auto;">
                    @if(!empty($lead->chat_transcript))
                        <ul class="list-unstyled mb-0">
                            @foreach($lead->chat_transcript as $message)
                                <li class="mb-2">
                                    <span class="badge badge-light-primary">{{ strtoupper($message['role'] ?? 'BOT') }}</span>
                                    <span class="ms-2">{{ $message['message'] ?? '' }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        {{ __('N/A') }}
                    @endif
                </div>
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('admin.leads.index') }}" class="btn btn-light">
                    {{ __('Back') }}
                </a>
                @if($lead->blocked)
                    <form method="POST" action="{{ route('admin.leads.unblock', $lead) }}">
                        @csrf
                        <button type="submit" class="btn btn-light-warning">
                            <i class="bi bi-unlock"></i> {{ __('Unblock Lead') }}
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{ route('admin.leads.block', $lead) }}">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-lock"></i> {{ __('Block Lead') }}
                        </button>
                    </form>
                @endif
                <form method="POST" action="{{ route('admin.leads.destroy', $lead) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-light-danger">
                        <i class="bi bi-trash"></i> {{ __('Delete') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
