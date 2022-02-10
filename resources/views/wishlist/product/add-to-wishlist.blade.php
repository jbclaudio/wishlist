<wishlist v-if="$root.user" :sku="config.product.sku">
    <div slot-scope="{ mutation, variables, wishlistItem, refreshWishlist }">
        <graphql-mutation
            :query="mutation"
            :variables="variables"
            :callback="refreshWishlist"
        >
            <form slot-scope="{ mutate, mutated }" v-on:submit.prevent="mutate">
                <x-rapidez::button type="submit">
                    <template v-if="wishlistItem">
                        @lang('Remove from wishlist')
                    </template>
                    <template v-else>
                        @lang('Add to wishlist')
                    </template>
                </x-rapidez::button>
            <form>
        </graphql-mutation>
    </div>
</wishlist>

<x-rapidez::button v-else href="/login">
    @lang('Add to wishlist')
</x-rapidez::button>
