<h3>Create Party</h3>

<div style="margin: 10%">
<form action="<?php echo base_url().'votesBrain/addParty' ?>" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Party Name</label>
        <input type="text" class="form-control" name="partyname" placeholder="Party party">
        <small class="form-text text-muted">This will be the party of the candidates .</small>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>