import { registerBlockType } from '@wordpress/blocks'
import { __ } from '@wordpress/i18n'
import {

} from "@wordpress/block-editor"


registerBlockType( 'wp-guten-call-to-action-block/call-to-action', {
    title: __('WP Guten Call To Action'),
    icon: 'heart',
    category: 'common',
    keyword: [ 'call to action', 'banner' ],
    attributes: {},
    edit:( { attributes, setAttributes } ) => {
        return (
            <h1>Hello World</h1>
        )
    },

    save: ( { attributes } ) => {
        return (
            <h1>Hello World</h1>
        )
    }
} )