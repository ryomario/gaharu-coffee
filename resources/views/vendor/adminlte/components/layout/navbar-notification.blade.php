{{-- Navbar notification --}}

<li class="{{ $makeListItemClass() }}" id="{{ $id }}">

    {{-- Link --}}
    <a @if($enableDropdownMode) href="#" @endif {{ $attributes->merge($makeAnchorDefaultAttrs()) }}>

        {{-- Icon --}}
        <i class="{{ $makeIconClass() }}"></i>

        {{-- Badge --}}
        @php
            $low_quantity_products = \Modules\Product\Entities\Product::select('id', 'product_quantity', 'product_stock_alert', 'product_code')->whereColumn('product_quantity', '<=', 'product_stock_alert')->get();
        @endphp
        @if($low_quantity_products->count() >= 1)
            <span class="{{ $makeBadgeClass() }}" style="    font-size: 8px !important; right: 0px; top: 5px;">
                {{ $low_quantity_products->count() }}
            </span>
        @endif

    </a>

    {{-- Dropdown Menu --}}
    @if($enableDropdownMode)

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

            {{-- Custom dropdown content provided by external source --}}
            <div class="adminlte-dropdown-content">
                <div class="dropdown-header bg-light">
                    <strong>{{ $low_quantity_products->count() }} Notifications</strong>
                </div>
                @forelse($low_quantity_products as $product)
                    <a class="dropdown-item align-items-start" href="{{ route('products.show', $product->id) }}">
                        <i class="bi bi-hash mr-1 text-primary"></i> 
                        <span style="text-wrap: wrap; min-width: 15rem;">Product: "{{ $product->product_code }}" is low in quantity!</span>
                    </a>
                @empty
                    <a class="dropdown-item" href="#">
                        <i class="bi bi-app-indicator mr-2 text-danger"></i> No notifications available.
                    </a>
                @endforelse
            </div>

            {{-- Dropdown divider --}}
            <!-- <div class="dropdown-divider"></div> -->

            {{-- Dropdown footer with link --}}
            <!-- <a href="{{ $attributes->get('href') }}" class="dropdown-item dropdown-footer">
                @isset($dropdownFooterLabel)
                    {{ $dropdownFooterLabel }}
                @else
                    <i class="fas fa-lg fa-search-plus"></i>
                @endisset
            </a> -->

        </div>

    @endif

</li>

{{-- If required, update the notification periodically --}}

@if (! is_null($makeUpdateUrl()) && $makeUpdatePeriod() > 0)
@push('js')
<script>

    $(() => {

        // Method to get new notification data from the configured url.

        let updateNotification = (nLink) =>
        {
            // Make an ajax call to the configured url. The response should be
            // an object with the new data. The supported properties are:
            // 'label', 'label_color', 'icon_color' and 'dropdown'.

            $.ajax({
                url: "{{ $makeUpdateUrl() }}"
            })
            .done((data) => {
                nLink.update(data);
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR, textStatus, errorThrown);
            });
        };

        // First load of the notification data.

        let nLink = new _AdminLTE_NavbarNotification("{{ $id }}");
        updateNotification(nLink);

        // Periodically update the notification.

        setInterval(updateNotification, {{ $makeUpdatePeriod() }}, nLink);
    })

</script>
@endpush
@endif

{{-- Register Javascript utility class for this component --}}

@once
@push('js')
<script>

    class _AdminLTE_NavbarNotification {

        /**
         * Constructor.
         *
         * target: The id of the target notification link.
         */
        constructor(target)
        {
            this.target = target;
        }

        /**
         * Update the notification link.
         *
         * data: An object with the new data.
         */
        update(data)
        {
            // Check if target and data exists.

            let t = $(`li#${this.target}`);

            if (t.length <= 0 || ! data) {
                return;
            }

            let badge = t.find(".navbar-badge");
            let icon = t.find(".nav-link > i");
            let dropdown = t.find(".adminlte-dropdown-content");

            // Update the badge label.

            if (data.label && data.label > 0) {
                badge.html(data.label);
            } else {
                badge.empty();
            }

            // Update the badge color.

            if (data.label_color) {
                badge.removeClass((idx, classes) => {
                    return (classes.match(/(^|\s)badge-\S+/g) || []).join(' ');
                }).addClass(`badge-${data.label_color} badge-pill`);
            }

            // Update the icon color.

            if (data.icon_color) {
                icon.removeClass((idx, classes) => {
                    return (classes.match(/(^|\s)text-\S+/g) || []).join(' ');
                }).addClass(`text-${data.icon_color}`);
            }

            // Update the dropdown content.

            if (data.dropdown && dropdown.length > 0) {
                dropdown.html(data.dropdown);
            }
        }
    }

</script>
@endpush
@endonce
