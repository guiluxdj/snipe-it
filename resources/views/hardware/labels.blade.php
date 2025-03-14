<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Labels</title>

</head>

<body>

    <?php
    $settings->labels_width = $settings->labels_width - $settings->labels_display_sgutter;
    $settings->labels_height = $settings->labels_height - $settings->labels_display_bgutter;
    // Leave space on bottom for 1D barcode if necessary
    $qr_size = $settings->alt_barcode_enabled == '1' && $settings->alt_barcode != '' ? $settings->labels_height - 0.3 : $settings->labels_height - 0.1;
    ?>

    <style>
        body {
            font-family: arial, helvetica, sans-serif;
            width: {{ $settings->labels_pagewidth }}in;
            height: {{ $settings->labels_pageheight }}in;
            margin: {{ $settings->labels_pmargin_top }}in {{ $settings->labels_pmargin_right }}in {{ $settings->labels_pmargin_bottom }}in {{ $settings->labels_pmargin_left }}in;
            font-size: {{ $settings->labels_fontsize }}pt;
        }

        .label {
            width: {{ $settings->labels_width }}in;
            height: {{ $settings->labels_height }}in;
            padding: 0in;
            margin-right: {{ $settings->labels_display_sgutter }}in;
            /* the gutter */
            margin-bottom: {{ $settings->labels_display_bgutter }}in;
            display: inline-block;
            overflow: hidden;
        }

        .page-break {
            page-break-after: always;
        }

         div.qr_img {
                /* width: {{ $qr_size }}in;
            height: {{ $qr_size }}in; */
                width: 0.8in;
                height: 0.8in;

                float: left;
                display: inline-flex;
                /*  padding-right: .15in;*/
            }

      img.qr_img {

                width: 100%;
                height: 100%;
                margin-top: 0;
                margin-left: 0;
                padding-bottom: .04in;
            }

            img.barcode {
                display: block;
                margin-top: -7px;
                width: 100%;
            }

            div.label-logo {
                float: right;
                display: inline-block;
            }

            img.label-logo {
                height: 0.5in;
                margin-top: 60px;
                margin-right: 0px;
            }

            .qr_text {
                width: {{ $settings->labels_width }}in;
                height: {{ $settings->labels_height }}in;
                padding-top: {{ $settings->labels_display_bgutter }}in;
                font-family: arial, helvetica, sans-serif;
                font-size: {{ $settings->labels_fontsize }}pt;
                padding-right: .0001in;
                overflow: hidden !important;
                display: inline;
                word-wrap: break-word;
                word-break: break-all;
            }

        div.barcode_container {

            width: 100%;
            display: inline;
            overflow: hidden;
        }

        .next-padding {
            margin: {{ $settings->labels_pmargin_top }}in {{ $settings->labels_pmargin_right }}in {{ $settings->labels_pmargin_bottom }}in {{ $settings->labels_pmargin_left }}in;
        }

        @media print {
            .noprint {
                display: none !important;
            }

            .label {
                width: {{ $settings->labels_width }}in;
                height: {{ $settings->labels_height }}in;
                padding: 0in;
                margin-right: {{ $settings->labels_display_sgutter }}in;
                /* the gutter */
                margin-bottom: {{ $settings->labels_display_bgutter }}in;
                display: inline-block;
                overflow: hidden;
            }

            .page-break {
                page-break-after: always;
            }

            div.qr_img {
                /* width: {{ $qr_size }}in;
            height: {{ $qr_size }}in; */
                width: 0.8in;
                height: 0.8in;

                float: left;
                display: inline-flex;
                /*  padding-right: .15in;*/
            }

            img.qr_img {

                width: 100%;
                height: 100%;
                margin-top: 0;
                margin-left: 0;
                padding-bottom: .04in;
            }

            img.barcode {
                display: block;
                margin-top: -7px;
                width: 100%;
            }

            div.label-logo {
                float: right;
                display: inline-block;
            }

            img.label-logo {
                height: 0.5in;
                margin-top: 60px;
                margin-right: 0px;
            }

            .qr_text {
                width: {{ $settings->labels_width }}in;
                height: {{ $settings->labels_height }}in;
                padding-top: {{ $settings->labels_display_bgutter }}in;
                font-family: arial, helvetica, sans-serif;
                font-size: {{ $settings->labels_fontsize }}pt;
                padding-right: .0001in;
                overflow: hidden !important;
                display: inline;
                word-wrap: break-word;
                word-break: break-all;
            }

            div.barcode_container {

                width: 100%;
                display: inline;
                overflow: hidden;
            }

            .next-padding {
                margin: {{ $settings->labels_pmargin_top }}in {{ $settings->labels_pmargin_right }}in {{ $settings->labels_pmargin_bottom }}in {{ $settings->labels_pmargin_left }}in;
            }

            @media print {
                .noprint {
                    display: none !important;
                }

                .next-padding {
                    margin: {{ $settings->labels_pmargin_top }}in {{ $settings->labels_pmargin_right }}in {{ $settings->labels_pmargin_bottom }}in {{ $settings->labels_pmargin_left }}in;
                    font-size: 0;
                }
            }

            @media screen {
                .label {
                    outline: .02in black solid;
                    /* outline doesn't occupy space like border does */
                }

                .noprint {
                    font-size: 13px;
                    padding-bottom: 15px;
                }
            }

            @if ($snipeSettings->custom_css)
                {!! $snipeSettings->show_custom_css() !!}
            @endif
    </style>

    @foreach ($assets as $asset)
        <?php $count++; ?>
        <div class="label">

            @if ($settings->qr_code == '1')
                <div class="qr_img">
                    <img src="{{ config('app.url') }}/hardware/{{ $asset->id }}/qr_code" class="qr_img">
                </div>
            @endif

            <div class="qr_text">
                @if ($settings->label_logo)
                    <div class="label-logo">
                        <img class="label-logo"
                            src="{{ Storage::disk('public')->url('') . e($snipeSettings->label_logo) }}">
                    </div>
                @endif
                @if ($settings->qr_text != '')
                    <div class="pull-left">
                        <strong>{{ $settings->qr_text }}</strong>
                        <br>
                    </div>
                @endif
                @if ($settings->labels_display_tag == '1' && $asset->asset_tag != '')
                    <div class="pull-left" style="margin-top:5px">
                        Tag: <strong>{{ $asset->asset_tag }}</strong>
                    </div>
                @endif
                @if ($settings->labels_display_name == '1' && $asset->name != '')
                    <div class="pull-left">
                        Nom: <strong>{{ $asset->name }}</strong>
                    </div>
                @endif
                @if ($settings->labels_display_model == '1' && $asset->model->name != '')
                    <div class="pull-left">
                        Modèle: <strong>{{ $asset->model->manufacturer->name }} {{ $asset->model->name }}</strong>
                    </div>
                @endif
                @if ($settings->labels_display_serial == '1' && $asset->serial != '')
                    <div class="pull-left">
                        N° série: <strong>{{ $asset->serial }}</strong>
                    </div>
                @endif

                @if ($settings->labels_display_company_name == '1' && $asset->location)
                    <div class="pull-left">
                        Emplacement: <strong>{{ $asset->location->name }}</strong>
                    </div>
                @endif


                @if ($asset->last_checkout)
                    <div class="pull-left">
                        Livraison: <strong> 
                           @if ($asset->assignedToUser)
                                {{ $asset->assignedTouser->first_name . ' ' . $asset->assignedTouser->last_name}}
                            @endif
                            ({{ \Carbon\Carbon::parse($asset->last_checkout)->format('d/m/Y') }})</strong>
                    </div>
                @else
                    @if ($asset->purchase_date)
                        <div class="pull-left">
                            Date achat: <strong>{{ $asset->purchase_date->format('d/m/Y') }}</strong>
                        </div>
                    @endif
                @endif


            </div>

        @if ((($settings->alt_barcode_enabled=='1') && $settings->alt_barcode!=''))
            <div class="barcode_container">
                <img src="{{ config('app.url') }}/hardware/{{ $asset->id }}/barcode" class="barcode">
            </div>
        @endif



        </div>

        @if ($count % $settings->labels_per_page == 0 && $count != count($assets))
            <div class="page-break"></div>
            <div class="next-padding">&nbsp;</div>
        @endif
    @endforeach


</body>

</html>
