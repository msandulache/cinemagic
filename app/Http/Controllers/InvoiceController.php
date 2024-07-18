<?php

namespace App\Http\Controllers;

use App\Models\Invoice as InvoiceModel;
use Carbon\Carbon;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Invoice;

class InvoiceController extends Controller
{
    public function index()
    {
//        $orders = Invoice::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
//
//        return view('orders/history', ['orders' => $orders]);
    }

    public function show(InvoiceModel $invoice)
    {
        $customer = new Party([
            'name' => $invoice->billing_customer,
            'address' => $invoice->billing_address . ', ' . $invoice->billing_city,
            'phone' => $invoice->billing_phone,
        ]);

        $items = [];
        foreach ($invoice->items as $invoiceItem) {
            $invoiceItemName  = 'Bilet #';
            $invoiceItemName .= $invoiceItem->id;
            $invoiceItemName .= ' ( ' . $invoiceItem->ticket->movieHour->movie->title . ' - ';
            $invoiceItemName .= $invoiceItem->ticket->seat . ' - ';
            $invoiceItemName .= Carbon::parse($invoiceItem->ticket->movieHour->hour)->format('d.m H:i') . ' )';

            $items[] = InvoiceItem::make($invoiceItemName)->pricePerUnit($invoiceItem->ticket->price)->quantity(1);
        };

        $invoice = Invoice::make('Factura')
            ->status(__('Platit'))
            ->sequence($invoice->id)
            ->buyer($customer)
            ->date(Carbon::parse($invoice->date))
            ->filename('INV-' . $invoice->id)
            ->addItems($items)
            ->logo(public_path('vendor/invoices/invoice-logo.png'))
            // You can additionally save generated invoice to configured disk
            ->save('public');

        return $invoice->stream();
    }
}
