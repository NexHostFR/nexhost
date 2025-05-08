<?php

namespace App\Http\Controllers;

use App\Mail\TicketOpenMail;
use App\Models\ReponseTicket;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TicketPageController extends Controller
{
    public function view_list() {
        return view('manager.tickets.list_page', [
            'ticketsListe' => Ticket::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function view_create() {
        return view('manager.tickets.create_page');
    }

    public function create_ticket(Request $request) {
        $ticket = new Ticket();
        $ticket->titre = $request->input('titre');
        $ticket->departement = $request->input('departement');
        $ticket->product = $request->input('product');
        $ticket->content = $request->input('content');
        $ticket->user_id = auth()->user()->id;

        $ticket->save();

        Mail::to(auth()->user()->email)->send(new TicketOpenMail($ticket->id));
        return redirect('/manager/tickets');
    }

    public function view_ticket($id) {
        $ticket = Ticket::where('id', $id)->first();
        return view('manager.tickets.ticket_page', [
            'ticket' => $ticket,
            'reponsesTicketListe' => ReponseTicket::where('ticket_id', $ticket->id)->get()
        ]);
    }

    public function create_reponse(Request $request, $id) {
        $reponse = new ReponseTicket();
        $reponse->user_id = auth()->user()->id;
        $reponse->ticket_id = $id;
        $reponse->content = $request->input('contentReponse');

        $reponse->save();

        $ticket = Ticket::where('id', $id)->first();
        $ticket->status = 'client';
        $ticket->save();
        return redirect('/manager/tickets/view/'.$id);
    }
}
