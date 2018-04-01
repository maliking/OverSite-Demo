<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Taskrouter\V1\Workspace\Worker;

use Twilio\Options;
use Twilio\Values;

abstract class ReservationOptions
{
    /**
     * @param string $reservationStatus The reservation_status
     * @return ReadReservationOptions Options builder
     */
    public static function read($reservationStatus = Values::NONE)
    {
        return new ReadReservationOptions($reservationStatus);
    }

    /**
     * @param string $reservationStatus The reservation_status
     * @param string $workerActivitySid The worker_activity_sid
     * @param string $instruction The instruction
     * @param string $dequeuePostWorkActivitySid The dequeue_post_work_activity_sid
     * @param string $dequeueFrom The dequeue_from
     * @param string $dequeueRecord The dequeue_record
     * @param integer $dequeueTimeout The dequeue_timeout
     * @param string $dequeueTo The dequeue_to
     * @param string $dequeueStatusCallbackUrl The dequeue_status_callback_url
     * @param string $callFrom The call_from
     * @param string $callRecord The call_record
     * @param integer $callTimeout The call_timeout
     * @param string $callTo The call_to
     * @param string $callUrl The call_url
     * @param string $callStatusCallbackUrl The call_status_callback_url
     * @param boolean $callAccept The call_accept
     * @param string $redirectCallSid The redirect_call_sid
     * @param boolean $redirectAccept The redirect_accept
     * @param string $redirectUrl The redirect_url
     * @param string $to The to
     * @param string $from The from
     * @param string $statusCallback The status_callback
     * @param string $statusCallbackMethod The status_callback_method
     * @param string $statusCallbackEvent The status_callback_event
     * @param integer $timeout The timeout
     * @param boolean $record The record
     * @param boolean $muted The muted
     * @param string $beep The beep
     * @param boolean $startConferenceOnEnter The start_conference_on_enter
     * @param boolean $endConferenceOnExit The end_conference_on_exit
     * @param string $waitUrl The wait_url
     * @param string $waitMethod The wait_method
     * @param boolean $earlyMedia The early_media
     * @param integer $maxParticipants The max_participants
     * @param string $conferenceStatusCallback The conference_status_callback
     * @param string $conferenceStatusCallbackMethod The
     *                                               conference_status_callback_method
     * @param string $conferenceStatusCallbackEvent The
     *                                              conference_status_callback_event
     * @param string $conferenceRecord The conference_record
     * @param string $conferenceTrim The conference_trim
     * @param string $recordingChannels The recording_channels
     * @param string $recordingStatusCallback The recording_status_callback
     * @param string $recordingStatusCallbackMethod The
     *                                              recording_status_callback_method
     * @param string $conferenceRecordingStatusCallback The
     *                                                  conference_recording_status_callback
     * @param string $conferenceRecordingStatusCallbackMethod The
     *                                                        conference_recording_status_callback_method
     * @param string $region The region
     * @param string $sipAuthUsername The sip_auth_username
     * @param string $sipAuthPassword The sip_auth_password
     * @param string $dequeueStatusCallbackEvent The dequeue_status_callback_event
     * @param string $postWorkActivitySid The post_work_activity_sid
     * @return UpdateReservationOptions Options builder
     */
    public static function update($reservationStatus = Values::NONE, $workerActivitySid = Values::NONE, $instruction = Values::NONE, $dequeuePostWorkActivitySid = Values::NONE, $dequeueFrom = Values::NONE, $dequeueRecord = Values::NONE, $dequeueTimeout = Values::NONE, $dequeueTo = Values::NONE, $dequeueStatusCallbackUrl = Values::NONE, $callFrom = Values::NONE, $callRecord = Values::NONE, $callTimeout = Values::NONE, $callTo = Values::NONE, $callUrl = Values::NONE, $callStatusCallbackUrl = Values::NONE, $callAccept = Values::NONE, $redirectCallSid = Values::NONE, $redirectAccept = Values::NONE, $redirectUrl = Values::NONE, $to = Values::NONE, $from = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE, $statusCallbackEvent = Values::NONE, $timeout = Values::NONE, $record = Values::NONE, $muted = Values::NONE, $beep = Values::NONE, $startConferenceOnEnter = Values::NONE, $endConferenceOnExit = Values::NONE, $waitUrl = Values::NONE, $waitMethod = Values::NONE, $earlyMedia = Values::NONE, $maxParticipants = Values::NONE, $conferenceStatusCallback = Values::NONE, $conferenceStatusCallbackMethod = Values::NONE, $conferenceStatusCallbackEvent = Values::NONE, $conferenceRecord = Values::NONE, $conferenceTrim = Values::NONE, $recordingChannels = Values::NONE, $recordingStatusCallback = Values::NONE, $recordingStatusCallbackMethod = Values::NONE, $conferenceRecordingStatusCallback = Values::NONE, $conferenceRecordingStatusCallbackMethod = Values::NONE, $region = Values::NONE, $sipAuthUsername = Values::NONE, $sipAuthPassword = Values::NONE, $dequeueStatusCallbackEvent = Values::NONE, $postWorkActivitySid = Values::NONE)
    {
        return new UpdateReservationOptions($reservationStatus, $workerActivitySid, $instruction, $dequeuePostWorkActivitySid, $dequeueFrom, $dequeueRecord, $dequeueTimeout, $dequeueTo, $dequeueStatusCallbackUrl, $callFrom, $callRecord, $callTimeout, $callTo, $callUrl, $callStatusCallbackUrl, $callAccept, $redirectCallSid, $redirectAccept, $redirectUrl, $to, $from, $statusCallback, $statusCallbackMethod, $statusCallbackEvent, $timeout, $record, $muted, $beep, $startConferenceOnEnter, $endConferenceOnExit, $waitUrl, $waitMethod, $earlyMedia, $maxParticipants, $conferenceStatusCallback, $conferenceStatusCallbackMethod, $conferenceStatusCallbackEvent, $conferenceRecord, $conferenceTrim, $recordingChannels, $recordingStatusCallback, $recordingStatusCallbackMethod, $conferenceRecordingStatusCallback, $conferenceRecordingStatusCallbackMethod, $region, $sipAuthUsername, $sipAuthPassword, $dequeueStatusCallbackEvent, $postWorkActivitySid);
    }
}

class ReadReservationOptions extends Options
{
    /**
     * @param string $reservationStatus The reservation_status
     */
    public function __construct($reservationStatus = Values::NONE)
    {
        $this->options['reservationStatus'] = $reservationStatus;
    }

    /**
     * The reservation_status
     *
     * @param string $reservationStatus The reservation_status
     * @return $this Fluent Builder
     */
    public function setReservationStatus($reservationStatus)
    {
        $this->options['reservationStatus'] = $reservationStatus;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Taskrouter.V1.ReadReservationOptions ' . implode(' ', $options) . ']';
    }
}

class UpdateReservationOptions extends Options
{
    /**
     * @param string $reservationStatus The reservation_status
     * @param string $workerActivitySid The worker_activity_sid
     * @param string $instruction The instruction
     * @param string $dequeuePostWorkActivitySid The dequeue_post_work_activity_sid
     * @param string $dequeueFrom The dequeue_from
     * @param string $dequeueRecord The dequeue_record
     * @param integer $dequeueTimeout The dequeue_timeout
     * @param string $dequeueTo The dequeue_to
     * @param string $dequeueStatusCallbackUrl The dequeue_status_callback_url
     * @param string $callFrom The call_from
     * @param string $callRecord The call_record
     * @param integer $callTimeout The call_timeout
     * @param string $callTo The call_to
     * @param string $callUrl The call_url
     * @param string $callStatusCallbackUrl The call_status_callback_url
     * @param boolean $callAccept The call_accept
     * @param string $redirectCallSid The redirect_call_sid
     * @param boolean $redirectAccept The redirect_accept
     * @param string $redirectUrl The redirect_url
     * @param string $to The to
     * @param string $from The from
     * @param string $statusCallback The status_callback
     * @param string $statusCallbackMethod The status_callback_method
     * @param string $statusCallbackEvent The status_callback_event
     * @param integer $timeout The timeout
     * @param boolean $record The record
     * @param boolean $muted The muted
     * @param string $beep The beep
     * @param boolean $startConferenceOnEnter The start_conference_on_enter
     * @param boolean $endConferenceOnExit The end_conference_on_exit
     * @param string $waitUrl The wait_url
     * @param string $waitMethod The wait_method
     * @param boolean $earlyMedia The early_media
     * @param integer $maxParticipants The max_participants
     * @param string $conferenceStatusCallback The conference_status_callback
     * @param string $conferenceStatusCallbackMethod The
     *                                               conference_status_callback_method
     * @param string $conferenceStatusCallbackEvent The
     *                                              conference_status_callback_event
     * @param string $conferenceRecord The conference_record
     * @param string $conferenceTrim The conference_trim
     * @param string $recordingChannels The recording_channels
     * @param string $recordingStatusCallback The recording_status_callback
     * @param string $recordingStatusCallbackMethod The
     *                                              recording_status_callback_method
     * @param string $conferenceRecordingStatusCallback The
     *                                                  conference_recording_status_callback
     * @param string $conferenceRecordingStatusCallbackMethod The
     *                                                        conference_recording_status_callback_method
     * @param string $region The region
     * @param string $sipAuthUsername The sip_auth_username
     * @param string $sipAuthPassword The sip_auth_password
     * @param string $dequeueStatusCallbackEvent The dequeue_status_callback_event
     * @param string $postWorkActivitySid The post_work_activity_sid
     */
    public function __construct($reservationStatus = Values::NONE, $workerActivitySid = Values::NONE, $instruction = Values::NONE, $dequeuePostWorkActivitySid = Values::NONE, $dequeueFrom = Values::NONE, $dequeueRecord = Values::NONE, $dequeueTimeout = Values::NONE, $dequeueTo = Values::NONE, $dequeueStatusCallbackUrl = Values::NONE, $callFrom = Values::NONE, $callRecord = Values::NONE, $callTimeout = Values::NONE, $callTo = Values::NONE, $callUrl = Values::NONE, $callStatusCallbackUrl = Values::NONE, $callAccept = Values::NONE, $redirectCallSid = Values::NONE, $redirectAccept = Values::NONE, $redirectUrl = Values::NONE, $to = Values::NONE, $from = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE, $statusCallbackEvent = Values::NONE, $timeout = Values::NONE, $record = Values::NONE, $muted = Values::NONE, $beep = Values::NONE, $startConferenceOnEnter = Values::NONE, $endConferenceOnExit = Values::NONE, $waitUrl = Values::NONE, $waitMethod = Values::NONE, $earlyMedia = Values::NONE, $maxParticipants = Values::NONE, $conferenceStatusCallback = Values::NONE, $conferenceStatusCallbackMethod = Values::NONE, $conferenceStatusCallbackEvent = Values::NONE, $conferenceRecord = Values::NONE, $conferenceTrim = Values::NONE, $recordingChannels = Values::NONE, $recordingStatusCallback = Values::NONE, $recordingStatusCallbackMethod = Values::NONE, $conferenceRecordingStatusCallback = Values::NONE, $conferenceRecordingStatusCallbackMethod = Values::NONE, $region = Values::NONE, $sipAuthUsername = Values::NONE, $sipAuthPassword = Values::NONE, $dequeueStatusCallbackEvent = Values::NONE, $postWorkActivitySid = Values::NONE)
    {
        $this->options['reservationStatus'] = $reservationStatus;
        $this->options['workerActivitySid'] = $workerActivitySid;
        $this->options['instruction'] = $instruction;
        $this->options['dequeuePostWorkActivitySid'] = $dequeuePostWorkActivitySid;
        $this->options['dequeueFrom'] = $dequeueFrom;
        $this->options['dequeueRecord'] = $dequeueRecord;
        $this->options['dequeueTimeout'] = $dequeueTimeout;
        $this->options['dequeueTo'] = $dequeueTo;
        $this->options['dequeueStatusCallbackUrl'] = $dequeueStatusCallbackUrl;
        $this->options['callFrom'] = $callFrom;
        $this->options['callRecord'] = $callRecord;
        $this->options['callTimeout'] = $callTimeout;
        $this->options['callTo'] = $callTo;
        $this->options['callUrl'] = $callUrl;
        $this->options['callStatusCallbackUrl'] = $callStatusCallbackUrl;
        $this->options['callAccept'] = $callAccept;
        $this->options['redirectCallSid'] = $redirectCallSid;
        $this->options['redirectAccept'] = $redirectAccept;
        $this->options['redirectUrl'] = $redirectUrl;
        $this->options['to'] = $to;
        $this->options['from'] = $from;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        $this->options['statusCallbackEvent'] = $statusCallbackEvent;
        $this->options['timeout'] = $timeout;
        $this->options['record'] = $record;
        $this->options['muted'] = $muted;
        $this->options['beep'] = $beep;
        $this->options['startConferenceOnEnter'] = $startConferenceOnEnter;
        $this->options['endConferenceOnExit'] = $endConferenceOnExit;
        $this->options['waitUrl'] = $waitUrl;
        $this->options['waitMethod'] = $waitMethod;
        $this->options['earlyMedia'] = $earlyMedia;
        $this->options['maxParticipants'] = $maxParticipants;
        $this->options['conferenceStatusCallback'] = $conferenceStatusCallback;
        $this->options['conferenceStatusCallbackMethod'] = $conferenceStatusCallbackMethod;
        $this->options['conferenceStatusCallbackEvent'] = $conferenceStatusCallbackEvent;
        $this->options['conferenceRecord'] = $conferenceRecord;
        $this->options['conferenceTrim'] = $conferenceTrim;
        $this->options['recordingChannels'] = $recordingChannels;
        $this->options['recordingStatusCallback'] = $recordingStatusCallback;
        $this->options['recordingStatusCallbackMethod'] = $recordingStatusCallbackMethod;
        $this->options['conferenceRecordingStatusCallback'] = $conferenceRecordingStatusCallback;
        $this->options['conferenceRecordingStatusCallbackMethod'] = $conferenceRecordingStatusCallbackMethod;
        $this->options['region'] = $region;
        $this->options['sipAuthUsername'] = $sipAuthUsername;
        $this->options['sipAuthPassword'] = $sipAuthPassword;
        $this->options['dequeueStatusCallbackEvent'] = $dequeueStatusCallbackEvent;
        $this->options['postWorkActivitySid'] = $postWorkActivitySid;
    }

    /**
     * The reservation_status
     *
     * @param string $reservationStatus The reservation_status
     * @return $this Fluent Builder
     */
    public function setReservationStatus($reservationStatus)
    {
        $this->options['reservationStatus'] = $reservationStatus;
        return $this;
    }

    /**
     * The worker_activity_sid
     *
     * @param string $workerActivitySid The worker_activity_sid
     * @return $this Fluent Builder
     */
    public function setWorkerActivitySid($workerActivitySid)
    {
        $this->options['workerActivitySid'] = $workerActivitySid;
        return $this;
    }

    /**
     * The instruction
     *
     * @param string $instruction The instruction
     * @return $this Fluent Builder
     */
    public function setInstruction($instruction)
    {
        $this->options['instruction'] = $instruction;
        return $this;
    }

    /**
     * The dequeue_post_work_activity_sid
     *
     * @param string $dequeuePostWorkActivitySid The dequeue_post_work_activity_sid
     * @return $this Fluent Builder
     */
    public function setDequeuePostWorkActivitySid($dequeuePostWorkActivitySid)
    {
        $this->options['dequeuePostWorkActivitySid'] = $dequeuePostWorkActivitySid;
        return $this;
    }

    /**
     * The dequeue_from
     *
     * @param string $dequeueFrom The dequeue_from
     * @return $this Fluent Builder
     */
    public function setDequeueFrom($dequeueFrom)
    {
        $this->options['dequeueFrom'] = $dequeueFrom;
        return $this;
    }

    /**
     * The dequeue_record
     *
     * @param string $dequeueRecord The dequeue_record
     * @return $this Fluent Builder
     */
    public function setDequeueRecord($dequeueRecord)
    {
        $this->options['dequeueRecord'] = $dequeueRecord;
        return $this;
    }

    /**
     * The dequeue_timeout
     *
     * @param integer $dequeueTimeout The dequeue_timeout
     * @return $this Fluent Builder
     */
    public function setDequeueTimeout($dequeueTimeout)
    {
        $this->options['dequeueTimeout'] = $dequeueTimeout;
        return $this;
    }

    /**
     * The dequeue_to
     *
     * @param string $dequeueTo The dequeue_to
     * @return $this Fluent Builder
     */
    public function setDequeueTo($dequeueTo)
    {
        $this->options['dequeueTo'] = $dequeueTo;
        return $this;
    }

    /**
     * The dequeue_status_callback_url
     *
     * @param string $dequeueStatusCallbackUrl The dequeue_status_callback_url
     * @return $this Fluent Builder
     */
    public function setDequeueStatusCallbackUrl($dequeueStatusCallbackUrl)
    {
        $this->options['dequeueStatusCallbackUrl'] = $dequeueStatusCallbackUrl;
        return $this;
    }

    /**
     * The call_from
     *
     * @param string $callFrom The call_from
     * @return $this Fluent Builder
     */
    public function setCallFrom($callFrom)
    {
        $this->options['callFrom'] = $callFrom;
        return $this;
    }

    /**
     * The call_record
     *
     * @param string $callRecord The call_record
     * @return $this Fluent Builder
     */
    public function setCallRecord($callRecord)
    {
        $this->options['callRecord'] = $callRecord;
        return $this;
    }

    /**
     * The call_timeout
     *
     * @param integer $callTimeout The call_timeout
     * @return $this Fluent Builder
     */
    public function setCallTimeout($callTimeout)
    {
        $this->options['callTimeout'] = $callTimeout;
        return $this;
    }

    /**
     * The call_to
     *
     * @param string $callTo The call_to
     * @return $this Fluent Builder
     */
    public function setCallTo($callTo)
    {
        $this->options['callTo'] = $callTo;
        return $this;
    }

    /**
     * The call_url
     *
     * @param string $callUrl The call_url
     * @return $this Fluent Builder
     */
    public function setCallUrl($callUrl)
    {
        $this->options['callUrl'] = $callUrl;
        return $this;
    }

    /**
     * The call_status_callback_url
     *
     * @param string $callStatusCallbackUrl The call_status_callback_url
     * @return $this Fluent Builder
     */
    public function setCallStatusCallbackUrl($callStatusCallbackUrl)
    {
        $this->options['callStatusCallbackUrl'] = $callStatusCallbackUrl;
        return $this;
    }

    /**
     * The call_accept
     *
     * @param boolean $callAccept The call_accept
     * @return $this Fluent Builder
     */
    public function setCallAccept($callAccept)
    {
        $this->options['callAccept'] = $callAccept;
        return $this;
    }

    /**
     * The redirect_call_sid
     *
     * @param string $redirectCallSid The redirect_call_sid
     * @return $this Fluent Builder
     */
    public function setRedirectCallSid($redirectCallSid)
    {
        $this->options['redirectCallSid'] = $redirectCallSid;
        return $this;
    }

    /**
     * The redirect_accept
     *
     * @param boolean $redirectAccept The redirect_accept
     * @return $this Fluent Builder
     */
    public function setRedirectAccept($redirectAccept)
    {
        $this->options['redirectAccept'] = $redirectAccept;
        return $this;
    }

    /**
     * The redirect_url
     *
     * @param string $redirectUrl The redirect_url
     * @return $this Fluent Builder
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->options['redirectUrl'] = $redirectUrl;
        return $this;
    }

    /**
     * The to
     *
     * @param string $to The to
     * @return $this Fluent Builder
     */
    public function setTo($to)
    {
        $this->options['to'] = $to;
        return $this;
    }

    /**
     * The from
     *
     * @param string $from The from
     * @return $this Fluent Builder
     */
    public function setFrom($from)
    {
        $this->options['from'] = $from;
        return $this;
    }

    /**
     * The status_callback
     *
     * @param string $statusCallback The status_callback
     * @return $this Fluent Builder
     */
    public function setStatusCallback($statusCallback)
    {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }

    /**
     * The status_callback_method
     *
     * @param string $statusCallbackMethod The status_callback_method
     * @return $this Fluent Builder
     */
    public function setStatusCallbackMethod($statusCallbackMethod)
    {
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        return $this;
    }

    /**
     * The status_callback_event
     *
     * @param string $statusCallbackEvent The status_callback_event
     * @return $this Fluent Builder
     */
    public function setStatusCallbackEvent($statusCallbackEvent)
    {
        $this->options['statusCallbackEvent'] = $statusCallbackEvent;
        return $this;
    }

    /**
     * The timeout
     *
     * @param integer $timeout The timeout
     * @return $this Fluent Builder
     */
    public function setTimeout($timeout)
    {
        $this->options['timeout'] = $timeout;
        return $this;
    }

    /**
     * The record
     *
     * @param boolean $record The record
     * @return $this Fluent Builder
     */
    public function setRecord($record)
    {
        $this->options['record'] = $record;
        return $this;
    }

    /**
     * The muted
     *
     * @param boolean $muted The muted
     * @return $this Fluent Builder
     */
    public function setMuted($muted)
    {
        $this->options['muted'] = $muted;
        return $this;
    }

    /**
     * The beep
     *
     * @param string $beep The beep
     * @return $this Fluent Builder
     */
    public function setBeep($beep)
    {
        $this->options['beep'] = $beep;
        return $this;
    }

    /**
     * The start_conference_on_enter
     *
     * @param boolean $startConferenceOnEnter The start_conference_on_enter
     * @return $this Fluent Builder
     */
    public function setStartConferenceOnEnter($startConferenceOnEnter)
    {
        $this->options['startConferenceOnEnter'] = $startConferenceOnEnter;
        return $this;
    }

    /**
     * The end_conference_on_exit
     *
     * @param boolean $endConferenceOnExit The end_conference_on_exit
     * @return $this Fluent Builder
     */
    public function setEndConferenceOnExit($endConferenceOnExit)
    {
        $this->options['endConferenceOnExit'] = $endConferenceOnExit;
        return $this;
    }

    /**
     * The wait_url
     *
     * @param string $waitUrl The wait_url
     * @return $this Fluent Builder
     */
    public function setWaitUrl($waitUrl)
    {
        $this->options['waitUrl'] = $waitUrl;
        return $this;
    }

    /**
     * The wait_method
     *
     * @param string $waitMethod The wait_method
     * @return $this Fluent Builder
     */
    public function setWaitMethod($waitMethod)
    {
        $this->options['waitMethod'] = $waitMethod;
        return $this;
    }

    /**
     * The early_media
     *
     * @param boolean $earlyMedia The early_media
     * @return $this Fluent Builder
     */
    public function setEarlyMedia($earlyMedia)
    {
        $this->options['earlyMedia'] = $earlyMedia;
        return $this;
    }

    /**
     * The max_participants
     *
     * @param integer $maxParticipants The max_participants
     * @return $this Fluent Builder
     */
    public function setMaxParticipants($maxParticipants)
    {
        $this->options['maxParticipants'] = $maxParticipants;
        return $this;
    }

    /**
     * The conference_status_callback
     *
     * @param string $conferenceStatusCallback The conference_status_callback
     * @return $this Fluent Builder
     */
    public function setConferenceStatusCallback($conferenceStatusCallback)
    {
        $this->options['conferenceStatusCallback'] = $conferenceStatusCallback;
        return $this;
    }

    /**
     * The conference_status_callback_method
     *
     * @param string $conferenceStatusCallbackMethod The
     *                                               conference_status_callback_method
     * @return $this Fluent Builder
     */
    public function setConferenceStatusCallbackMethod($conferenceStatusCallbackMethod)
    {
        $this->options['conferenceStatusCallbackMethod'] = $conferenceStatusCallbackMethod;
        return $this;
    }

    /**
     * The conference_status_callback_event
     *
     * @param string $conferenceStatusCallbackEvent The
     *                                              conference_status_callback_event
     * @return $this Fluent Builder
     */
    public function setConferenceStatusCallbackEvent($conferenceStatusCallbackEvent)
    {
        $this->options['conferenceStatusCallbackEvent'] = $conferenceStatusCallbackEvent;
        return $this;
    }

    /**
     * The conference_record
     *
     * @param string $conferenceRecord The conference_record
     * @return $this Fluent Builder
     */
    public function setConferenceRecord($conferenceRecord)
    {
        $this->options['conferenceRecord'] = $conferenceRecord;
        return $this;
    }

    /**
     * The conference_trim
     *
     * @param string $conferenceTrim The conference_trim
     * @return $this Fluent Builder
     */
    public function setConferenceTrim($conferenceTrim)
    {
        $this->options['conferenceTrim'] = $conferenceTrim;
        return $this;
    }

    /**
     * The recording_channels
     *
     * @param string $recordingChannels The recording_channels
     * @return $this Fluent Builder
     */
    public function setRecordingChannels($recordingChannels)
    {
        $this->options['recordingChannels'] = $recordingChannels;
        return $this;
    }

    /**
     * The recording_status_callback
     *
     * @param string $recordingStatusCallback The recording_status_callback
     * @return $this Fluent Builder
     */
    public function setRecordingStatusCallback($recordingStatusCallback)
    {
        $this->options['recordingStatusCallback'] = $recordingStatusCallback;
        return $this;
    }

    /**
     * The recording_status_callback_method
     *
     * @param string $recordingStatusCallbackMethod The
     *                                              recording_status_callback_method
     * @return $this Fluent Builder
     */
    public function setRecordingStatusCallbackMethod($recordingStatusCallbackMethod)
    {
        $this->options['recordingStatusCallbackMethod'] = $recordingStatusCallbackMethod;
        return $this;
    }

    /**
     * The conference_recording_status_callback
     *
     * @param string $conferenceRecordingStatusCallback The
     *                                                  conference_recording_status_callback
     * @return $this Fluent Builder
     */
    public function setConferenceRecordingStatusCallback($conferenceRecordingStatusCallback)
    {
        $this->options['conferenceRecordingStatusCallback'] = $conferenceRecordingStatusCallback;
        return $this;
    }

    /**
     * The conference_recording_status_callback_method
     *
     * @param string $conferenceRecordingStatusCallbackMethod The
     *                                                        conference_recording_status_callback_method
     * @return $this Fluent Builder
     */
    public function setConferenceRecordingStatusCallbackMethod($conferenceRecordingStatusCallbackMethod)
    {
        $this->options['conferenceRecordingStatusCallbackMethod'] = $conferenceRecordingStatusCallbackMethod;
        return $this;
    }

    /**
     * The region
     *
     * @param string $region The region
     * @return $this Fluent Builder
     */
    public function setRegion($region)
    {
        $this->options['region'] = $region;
        return $this;
    }

    /**
     * The sip_auth_username
     *
     * @param string $sipAuthUsername The sip_auth_username
     * @return $this Fluent Builder
     */
    public function setSipAuthUsername($sipAuthUsername)
    {
        $this->options['sipAuthUsername'] = $sipAuthUsername;
        return $this;
    }

    /**
     * The sip_auth_password
     *
     * @param string $sipAuthPassword The sip_auth_password
     * @return $this Fluent Builder
     */
    public function setSipAuthPassword($sipAuthPassword)
    {
        $this->options['sipAuthPassword'] = $sipAuthPassword;
        return $this;
    }

    /**
     * The dequeue_status_callback_event
     *
     * @param string $dequeueStatusCallbackEvent The dequeue_status_callback_event
     * @return $this Fluent Builder
     */
    public function setDequeueStatusCallbackEvent($dequeueStatusCallbackEvent)
    {
        $this->options['dequeueStatusCallbackEvent'] = $dequeueStatusCallbackEvent;
        return $this;
    }

    /**
     * The post_work_activity_sid
     *
     * @param string $postWorkActivitySid The post_work_activity_sid
     * @return $this Fluent Builder
     */
    public function setPostWorkActivitySid($postWorkActivitySid)
    {
        $this->options['postWorkActivitySid'] = $postWorkActivitySid;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Taskrouter.V1.UpdateReservationOptions ' . implode(' ', $options) . ']';
    }
}