<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Taskrouter\V1\Workspace;

use Twilio\Options;
use Twilio\Values;

abstract class TaskOptions
{
    /**
     * @param string $attributes The attributes
     * @param string $assignmentStatus The assignment_status
     * @param string $reason The reason
     * @param integer $priority The priority
     * @param string $taskChannel The task_channel
     * @return UpdateTaskOptions Options builder
     */
    public static function update($attributes = Values::NONE, $assignmentStatus = Values::NONE, $reason = Values::NONE, $priority = Values::NONE, $taskChannel = Values::NONE)
    {
        return new UpdateTaskOptions($attributes, $assignmentStatus, $reason, $priority, $taskChannel);
    }

    /**
     * @param integer $priority The priority
     * @param string $assignmentStatus The assignment_status
     * @param string $workflowSid The workflow_sid
     * @param string $workflowName The workflow_name
     * @param string $taskQueueSid The task_queue_sid
     * @param string $taskQueueName The task_queue_name
     * @param string $evaluateTaskAttributes The evaluate_task_attributes
     * @param string $ordering The ordering
     * @param boolean $hasAddons The has_addons
     * @return ReadTaskOptions Options builder
     */
    public static function read($priority = Values::NONE, $assignmentStatus = Values::NONE, $workflowSid = Values::NONE, $workflowName = Values::NONE, $taskQueueSid = Values::NONE, $taskQueueName = Values::NONE, $evaluateTaskAttributes = Values::NONE, $ordering = Values::NONE, $hasAddons = Values::NONE)
    {
        return new ReadTaskOptions($priority, $assignmentStatus, $workflowSid, $workflowName, $taskQueueSid, $taskQueueName, $evaluateTaskAttributes, $ordering, $hasAddons);
    }

    /**
     * @param integer $timeout The timeout
     * @param integer $priority The priority
     * @param string $taskChannel The task_channel
     * @param string $workflowSid The workflow_sid
     * @param string $attributes The attributes
     * @return CreateTaskOptions Options builder
     */
    public static function create($timeout = Values::NONE, $priority = Values::NONE, $taskChannel = Values::NONE, $workflowSid = Values::NONE, $attributes = Values::NONE)
    {
        return new CreateTaskOptions($timeout, $priority, $taskChannel, $workflowSid, $attributes);
    }
}

class UpdateTaskOptions extends Options
{
    /**
     * @param string $attributes The attributes
     * @param string $assignmentStatus The assignment_status
     * @param string $reason The reason
     * @param integer $priority The priority
     * @param string $taskChannel The task_channel
     */
    public function __construct($attributes = Values::NONE, $assignmentStatus = Values::NONE, $reason = Values::NONE, $priority = Values::NONE, $taskChannel = Values::NONE)
    {
        $this->options['attributes'] = $attributes;
        $this->options['assignmentStatus'] = $assignmentStatus;
        $this->options['reason'] = $reason;
        $this->options['priority'] = $priority;
        $this->options['taskChannel'] = $taskChannel;
    }

    /**
     * The attributes
     *
     * @param string $attributes The attributes
     * @return $this Fluent Builder
     */
    public function setAttributes($attributes)
    {
        $this->options['attributes'] = $attributes;
        return $this;
    }

    /**
     * The assignment_status
     *
     * @param string $assignmentStatus The assignment_status
     * @return $this Fluent Builder
     */
    public function setAssignmentStatus($assignmentStatus)
    {
        $this->options['assignmentStatus'] = $assignmentStatus;
        return $this;
    }

    /**
     * The reason
     *
     * @param string $reason The reason
     * @return $this Fluent Builder
     */
    public function setReason($reason)
    {
        $this->options['reason'] = $reason;
        return $this;
    }

    /**
     * The priority
     *
     * @param integer $priority The priority
     * @return $this Fluent Builder
     */
    public function setPriority($priority)
    {
        $this->options['priority'] = $priority;
        return $this;
    }

    /**
     * The task_channel
     *
     * @param string $taskChannel The task_channel
     * @return $this Fluent Builder
     */
    public function setTaskChannel($taskChannel)
    {
        $this->options['taskChannel'] = $taskChannel;
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
        return '[Twilio.Taskrouter.V1.UpdateTaskOptions ' . implode(' ', $options) . ']';
    }
}

class ReadTaskOptions extends Options
{
    /**
     * @param integer $priority The priority
     * @param string $assignmentStatus The assignment_status
     * @param string $workflowSid The workflow_sid
     * @param string $workflowName The workflow_name
     * @param string $taskQueueSid The task_queue_sid
     * @param string $taskQueueName The task_queue_name
     * @param string $evaluateTaskAttributes The evaluate_task_attributes
     * @param string $ordering The ordering
     * @param boolean $hasAddons The has_addons
     */
    public function __construct($priority = Values::NONE, $assignmentStatus = Values::NONE, $workflowSid = Values::NONE, $workflowName = Values::NONE, $taskQueueSid = Values::NONE, $taskQueueName = Values::NONE, $evaluateTaskAttributes = Values::NONE, $ordering = Values::NONE, $hasAddons = Values::NONE)
    {
        $this->options['priority'] = $priority;
        $this->options['assignmentStatus'] = $assignmentStatus;
        $this->options['workflowSid'] = $workflowSid;
        $this->options['workflowName'] = $workflowName;
        $this->options['taskQueueSid'] = $taskQueueSid;
        $this->options['taskQueueName'] = $taskQueueName;
        $this->options['evaluateTaskAttributes'] = $evaluateTaskAttributes;
        $this->options['ordering'] = $ordering;
        $this->options['hasAddons'] = $hasAddons;
    }

    /**
     * The priority
     *
     * @param integer $priority The priority
     * @return $this Fluent Builder
     */
    public function setPriority($priority)
    {
        $this->options['priority'] = $priority;
        return $this;
    }

    /**
     * The assignment_status
     *
     * @param string $assignmentStatus The assignment_status
     * @return $this Fluent Builder
     */
    public function setAssignmentStatus($assignmentStatus)
    {
        $this->options['assignmentStatus'] = $assignmentStatus;
        return $this;
    }

    /**
     * The workflow_sid
     *
     * @param string $workflowSid The workflow_sid
     * @return $this Fluent Builder
     */
    public function setWorkflowSid($workflowSid)
    {
        $this->options['workflowSid'] = $workflowSid;
        return $this;
    }

    /**
     * The workflow_name
     *
     * @param string $workflowName The workflow_name
     * @return $this Fluent Builder
     */
    public function setWorkflowName($workflowName)
    {
        $this->options['workflowName'] = $workflowName;
        return $this;
    }

    /**
     * The task_queue_sid
     *
     * @param string $taskQueueSid The task_queue_sid
     * @return $this Fluent Builder
     */
    public function setTaskQueueSid($taskQueueSid)
    {
        $this->options['taskQueueSid'] = $taskQueueSid;
        return $this;
    }

    /**
     * The task_queue_name
     *
     * @param string $taskQueueName The task_queue_name
     * @return $this Fluent Builder
     */
    public function setTaskQueueName($taskQueueName)
    {
        $this->options['taskQueueName'] = $taskQueueName;
        return $this;
    }

    /**
     * The evaluate_task_attributes
     *
     * @param string $evaluateTaskAttributes The evaluate_task_attributes
     * @return $this Fluent Builder
     */
    public function setEvaluateTaskAttributes($evaluateTaskAttributes)
    {
        $this->options['evaluateTaskAttributes'] = $evaluateTaskAttributes;
        return $this;
    }

    /**
     * The ordering
     *
     * @param string $ordering The ordering
     * @return $this Fluent Builder
     */
    public function setOrdering($ordering)
    {
        $this->options['ordering'] = $ordering;
        return $this;
    }

    /**
     * The has_addons
     *
     * @param boolean $hasAddons The has_addons
     * @return $this Fluent Builder
     */
    public function setHasAddons($hasAddons)
    {
        $this->options['hasAddons'] = $hasAddons;
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
        return '[Twilio.Taskrouter.V1.ReadTaskOptions ' . implode(' ', $options) . ']';
    }
}

class CreateTaskOptions extends Options
{
    /**
     * @param integer $timeout The timeout
     * @param integer $priority The priority
     * @param string $taskChannel The task_channel
     * @param string $workflowSid The workflow_sid
     * @param string $attributes The attributes
     */
    public function __construct($timeout = Values::NONE, $priority = Values::NONE, $taskChannel = Values::NONE, $workflowSid = Values::NONE, $attributes = Values::NONE)
    {
        $this->options['timeout'] = $timeout;
        $this->options['priority'] = $priority;
        $this->options['taskChannel'] = $taskChannel;
        $this->options['workflowSid'] = $workflowSid;
        $this->options['attributes'] = $attributes;
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
     * The priority
     *
     * @param integer $priority The priority
     * @return $this Fluent Builder
     */
    public function setPriority($priority)
    {
        $this->options['priority'] = $priority;
        return $this;
    }

    /**
     * The task_channel
     *
     * @param string $taskChannel The task_channel
     * @return $this Fluent Builder
     */
    public function setTaskChannel($taskChannel)
    {
        $this->options['taskChannel'] = $taskChannel;
        return $this;
    }

    /**
     * The workflow_sid
     *
     * @param string $workflowSid The workflow_sid
     * @return $this Fluent Builder
     */
    public function setWorkflowSid($workflowSid)
    {
        $this->options['workflowSid'] = $workflowSid;
        return $this;
    }

    /**
     * The attributes
     *
     * @param string $attributes The attributes
     * @return $this Fluent Builder
     */
    public function setAttributes($attributes)
    {
        $this->options['attributes'] = $attributes;
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
        return '[Twilio.Taskrouter.V1.CreateTaskOptions ' . implode(' ', $options) . ']';
    }
}