<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Attribution du matériel</title>
    <style>
        body {
            font-family: "Arial, Helvetica", sans-serif;
        }

        table.inventory {
            border: solid #000;
            border-width: 1px 1px 1px 1px;
            width: 100%;
        }

        @page {
            size: A4;
        }

        table.inventory th,
        table.inventory td {
            border: solid #000;
            border-width: 0 1px 1px 0;
            padding: 3px;
            font-size: 12px;
        }

        .print-logo {
            max-height: 40px;
        }
    </style>
</head>

<body>

    @if ($snipeSettings->logo_print_assets == '1')
        @if ($snipeSettings->brand == '3')

            <h2>
                @if ($snipeSettings->logo != '')
                    <img class="print-logo" src="{{ url('/') }}/uploads/{{ $snipeSettings->logo }}">
                @endif
                {{ $snipeSettings->site_name }}
            </h2>
        @elseif ($snipeSettings->brand == '2')
            @if ($snipeSettings->logo != '')
                <img class="print-logo" src="{{ url('/') }}/uploads/{{ $snipeSettings->logo }}">
            @endif
        @else
            <h2>{{ $snipeSettings->site_name }}</h2>
        @endif
    @endif

    @foreach ($users as $user)

        <h2 style="background-color: #243a58;padding: 15px;color: white;margin-bottom: 10px;">
            {{ $user->last_name . ' ' . $user->first_name }}</h2>
        <h6 style="margin-bottom: 3px;margin-top: 3px;">Email:
            {{ $user->email ? $user->email : '' }}</h6>
        <h6 style="margin-bottom: 3px;margin-top: 3px;">Service:
            {{ $user->department ? $user->department->name : '/' }}</h6>


        @if ($user->assets->count() > 0)
            @php
                $counter = 1;
            @endphp
            <table class="inventory">
                <thead>
                    <tr>
                        <th colspan="11">{{ trans('general.assets') }}</th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th style="width: 20px;"></th>
                        <th></th>
                        <th style="width: 10%;">{{ trans('general.asset_tag') }}</th>
                        <th style="width: 10%;">{{ trans('general.name') }}</th>
                        <th style="width: 10%;">{{ trans('general.category') }}</th>
                        <th style="width: 20%;">Marque</th>
                        <th style="width: 20%;">Modèle</th>
                        <th style="width: 10%;">N° de série</th>
                        <th style="width: 10%;">Garantie</th>
                        <th style="width: 10%;">Date d'achat</th>
                        <th style="width: 10%;">{{ trans('general.checked_out') }}</th>
                        </th>
                    </tr>
                </thead>

                @foreach ($user->assets as $asset)
                    <tr>
                        <td>{{ $counter }}</td>
                        <td><img src="/uploads/models/{{ $asset->model->image }}" height="60px" /></td>
                        <td>{{ $asset->asset_tag }}</td>
                        <td>{{ $asset->name }}</td>
                        <td>{{ $asset->model->category->name }}</td>
                        <td>{{ $asset->model->manufacturer->name }}</td>
                        <td>{{ $asset->model->name }}</td>
                        <td>{{ $asset->serial }}</td>
                        <td>
                            {{-- {{ $asset->warranty_months ? $asset->warranty_months . ' mois' : '' }}
                            <br>
                            {{ $asset->warranty_months ? ' Fin le ' . date('d/m/Y', strtotime($asset->present()->warrantee_expires())) : '' }} --}}
                        </td>

                        <td>{!! date('d/m/Y', strtotime($asset->purchase_date)) !!}</td>
                        <td>{!! date('d/m/Y', strtotime($asset->last_checkout)) !!}</td>

                    </tr>
                    @if ($settings->show_assigned_assets)
                        @php
                            $assignedCounter = 1;
                        @endphp
                        @foreach ($asset->assignedAssets as $asset)
                            <tr>
                                <td>{{ $counter }}.{{ $assignedCounter }}</td>
                                <td>{{ $asset->asset_tag }}</td>
                                <td>{{ $asset->name }}</td>
                                <td>{{ $asset->model->category->name }}</td>
                                <td>{{ $asset->model->name }}</td>
                                <td>{{ $asset->serial }}</td>
                                <td>
                                    {{ $asset->last_checkout }}</td>
                            </tr>
                            @php
                                $assignedCounter++;
                            @endphp
                        @endforeach
                    @endif
                    @php
                        $counter++;
                    @endphp
                @endforeach
            </table>
        @endif

        @if ($user->accessories->count() > 0)
            <br><br>
            <table class="inventory">
                <thead>
                    <tr>
                        <th colspan="7">{{ trans('general.accessories') }}</th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th style="width: 20px;"></th>
                        <th></th>
                        <th style="width: 30%;">{{ trans('general.name') }}</th>
                        <th style="width: 30%;">{{ trans('general.category') }}</th>
                        <th style="width: 10%;">Marque</th>
                        <th style="width: 10%;">{{ trans('general.checked_out') }}</th>
                        <th style="width: 20%;">Notes</th>
                    </tr>
                </thead>
                @php
                    $acounter = 1;
                @endphp

                @foreach ($user->accessories as $accessory)
                    @if ($accessory)
                        <tr>
                            <td>{{ $acounter }}</td>
                            <td><img src="/uploads/accessories/{{ $accessory->image }}" height="60px" /></td>
                            <td>{{ $accessory->name }} {{ $accessory->model_number }}</td>
                            <td>{{ $accessory->category->name }}</td>
                            <td>{{ $accessory->manufacturer ? $accessory->manufacturer->name : '' }}</td>
                            <td>{!! date('d/m/Y', strtotime($accessory->pivot->created_at)) !!}</td>
                            <td>{{ $accessory->getOriginal('pivot_note') }}</td>
                        </tr>
                        @php
                            $acounter++;
                        @endphp
                    @endif
                @endforeach
            </table>
        @endif

        @if ($user->licenses->count() > 0)
            <br><br>
            <table class="inventory">
                <thead>
                    <tr>
                        <th colspan="4">{{ trans('general.licenses') }}</th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th style="width: 20px;"></th>
                        <th style="width: 40%;">{{ trans('general.name') }}</th>
                        <th style="width: 50%;">{{ trans('general.license_serial') }}</th>
                        <th style="width: 10%;">{{ trans('general.checked_out') }}</th>
                    </tr>
                </thead>
                @php
                    $lcounter = 1;
                @endphp

                @foreach ($user->licenses as $license)
                    <tr>
                        <td>{{ $lcounter }}</td>
                        <td>{{ $license->name }}</td>
                        <td>
                            @can('viewKeys', $license)
                                {{ $license->serial }}
                            @else
                                <i class="fa-lock" aria-hidden="true"></i> {{ str_repeat('x', 15) }}
                            @endcan
                        </td>
                        <td>{!! date('d/m/Y', strtotime($license->assetlog->first()->created_at)) !!}</td>
                    </tr>
                    @php
                        $lcounter++;
                    @endphp
                @endforeach
            </table>
        @endif
        <DIV STYLE="page-break-before:always"></DIV>
     
    @endforeach
    <br>


</body>

</html>
