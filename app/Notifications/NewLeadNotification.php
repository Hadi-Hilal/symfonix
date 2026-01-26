<?php

namespace App\Notifications;

use App\Models\Lead;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewLeadNotification extends Notification
{
    use Queueable;

    public function __construct(protected Lead $lead) {}

    public function via(object $notifiable): array
    {
        $channels = ['mail'];

        if (class_exists(\Illuminate\Notifications\Messages\SlackMessage::class)
            && config('services.slack.notifications.webhook_url')) {
            $channels[] = 'slack';
        }

        return $channels;
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New Lead Captured')
            ->line('A new lead was captured via the chatbot.')
            ->line('Name: '.($this->lead->name ?? 'N/A'))
            ->line('Email: '.($this->lead->email ?? 'N/A'))
            ->line('Company: '.($this->lead->company_name ?? 'N/A'))
            ->line('Budget: '.($this->lead->project_budget ?? 'N/A'))
            ->line('Primary Service: '.($this->lead->service_interest ?? 'N/A'))
            ->line('Problem: '.($this->lead->problem_statement ?? 'N/A'));
    }

    public function toSlack(object $notifiable)
    {
        $slackMessageClass = \Illuminate\Notifications\Messages\SlackMessage::class;

        return (new $slackMessageClass)
            ->from(config('app.name'))
            ->content('New chatbot lead captured')
            ->attachment(function ($attachment) {
                $attachment->fields([
                    'Name' => $this->lead->name ?? 'N/A',
                    'Email' => $this->lead->email ?? 'N/A',
                    'Company' => $this->lead->company_name ?? 'N/A',
                    'Budget' => $this->lead->project_budget ?? 'N/A',
                    'Primary Service' => $this->lead->service_interest ?? 'N/A',
                ]);
            });
    }
}
